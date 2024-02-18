<?php

namespace App\Http\Controllers;
use App\Models\AdminInfo;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogSeo;
use App\Models\GlobalSeo;
use App\Models\PageSeo;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\ContactMail;

use Illuminate\Http\Request;

class frontendController extends Controller
{

   function home(){
        $pageseo = PageSeo::where('pagename', 'Home')->get();
        $homepageseo = PageSeo::where('pagename', 'Home')->get();
        $gseo = GlobalSeo::find(1);
        $dbs = DB::table('blogs as b')
        ->select('b.id', 'b.title', 'bc.bcname', 'b.description', 'b.file', 'b.slug', 'bc.bcslug')
        ->join('blogs_categories as bc', 'b.category', '=', 'bc.id')
        ->orderBy('b.id', 'desc')
        ->get();

        $cblog = BlogCategory::all();
        
        $c1 = BlogCategory::find(2);
        $c2 = BlogCategory::find(3);
        $c3 = BlogCategory::find(4);
        $c4 = BlogCategory::find(5);
        $firstBlog = Blog::where("category", 3)->get()->take(8);
        $secondBlog = Blog::where("category", 2)->get()->take(8);
        $thirdBlog = Blog::where("category", 4)->get()->take(8);
        $fourthBlog = Blog::where("category", 5)->get()->take(8);
        
        return view('home', ['c1'=>$c1,'c2'=>$c2,'c3'=>$c3,'c4'=>$c4,'firstBlog'=>$firstBlog,'secondBlog'=>$secondBlog,'thirdBlog'=>$thirdBlog,'fourthBlog'=>$fourthBlog,'cblog'=>$cblog,'pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo,'dbs'=>$dbs]);
    }

    function blog(){
        $blogs = Blog::paginate(8);
        $pageseo = PageSeo::where('pagename', 'Blog')->get();
        $homepageseo = PageSeo::where('pagename', 'Blog')->get();
        $gseo = GlobalSeo::find(1);
        return view('blog', ['blogs'=>$blogs,'pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function search(Request $req){
        $result = $req['s'];
        $blog = Blog::where("title", "like", "%" . $result . "%")->get();
        return view('search',['result'=>$result,'blog'=>$blog]);
    }
    
    function contact(){
        $pageseo = PageSeo::where('slug', 'contact-us')->get();
        $homepageseo = PageSeo::where('slug', 'contact-us')->get();
        $gseo = GlobalSeo::find(1);
        return view('contact', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }
    function about(){
        $pageseo = PageSeo::where('slug', 'about')->get();
        $homepageseo = PageSeo::where('slug', 'about')->get();
        $gseo = GlobalSeo::find(1);
        return view('about', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }
    function cancellation(){
        $pageseo = PageSeo::where('slug', 'cancellation-refund-policy')->get();
        $homepageseo = PageSeo::where('slug', 'cancellation-refund-policy')->get();
        $gseo = GlobalSeo::find(1);
        return view('cancellation-refund-policy', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }
    function termsofservice(){
        $pageseo = PageSeo::where('slug', 'terms-of-service')->get();
        $homepageseo = PageSeo::where('slug', 'terms-of-service')->get();
        $gseo = GlobalSeo::find(1);
        return view('terms-of-service', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }
    function privacypolicy(){
        $pageseo = PageSeo::where('slug', 'privacy-policy')->get();
        $homepageseo = PageSeo::where('slug', 'privacy-policy')->get();
        $gseo = GlobalSeo::find(1);
        return view('privacy-policy', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }
    function disclaimer(){
        $pageseo = PageSeo::where('slug', 'disclaimer')->get();
        $homepageseo = PageSeo::where('slug', 'disclaimer')->get();
        $gseo = GlobalSeo::find(1);
        return view('disclaimer', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }
    function blogcategories(){
        $pageseo = PageSeo::where('pagename', 'Categories')->get();
        $homepageseo = PageSeo::where('pagename', 'Categories')->get();
        $gseo = GlobalSeo::find(1);
        $blogs = BlogCategory::all();
        return view('categories', ['blogs'=>$blogs, 'pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function sendcontact(Request $req){
        $name = $req->name;
        $pwd = $req->pwd;
        $textarea = $req->textarea;

        $mailData = [
            'name' => $name,
            'pwd' => $pwd,
            'body' => $textarea,
        ];
          
        Mail::to('devendrasingh991731@gmail.com')->send(new ContactMail($mailData));
        return true;
    }

    function singleblog($slug){
        $seo = BlogSeo::where('canonical', $slug)->get();
        $blog = Blog::where('slug', $slug)->first();
        $gseo = GlobalSeo::find(1);
        $cblog = DB::table('blogs')
                ->leftJoin('blogs_categories', 'blogs.category', '=', 'blogs_categories.id')
                ->where('blogs_categories.id', $blog->category)
                ->take(6)
                ->get();
         
        $allblogs = Blog::all();
        return view('single-blog',['seo'=>$seo,'blog'=>$blog,'gseo'=>$gseo,'cblog'=>$cblog,'allblogs'=>$allblogs]);
    }

    function singlecategories($slug){
        $seo = BlogSeo::where('canonical', $slug)->get();
        $blog = BlogCategory::where('bcname', $slug)->first();
        $gseo = GlobalSeo::find(1);

        $cblog = DB::table('blogs as b')
        ->select('b.id', 'b.title', 'bc.bcname', 'b.description', 'b.file', 'b.slug', 'bc.bcslug')
        ->join('blogs_categories as bc', 'b.category', '=', 'bc.id')
        ->where('bc.bcslug', $slug)
        ->get();


       $allblogs = Blog::all();
        return view('single-category',['seo'=>$seo,'blog'=>$blog,'gseo'=>$gseo,'cblog'=>$cblog,'allblogs'=>$allblogs]);
    }

    function redirectpage($slug){
        $allblogs = Blog::all();
        foreach($allblogs as $allblogs)
        {
            if($slug === $allblogs['slug']){
                return redirect('blog/'.$slug);
             }
         }
        return view("404");
        
    }
  
}