<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\backendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [frontendController::class, 'home'])->name('front.home');
Route::get('/home', [frontendController::class, 'home'])->name('front.home');
Route::get('/about', [frontendController::class, 'about'])->name('front.about');
Route::get('/cancellation-refund-policy', [frontendController::class, 'cancellation'])->name('front.cancellation');
Route::get('/terms-of-service', [frontendController::class, 'termsofservice'])->name('front.terms');
Route::get('/privacy-policy', [frontendController::class, 'privacypolicy'])->name('front.privacy');
Route::get('/disclaimer', [frontendController::class, 'disclaimer'])->name('front.disclaimer');
Route::get('/search', [frontendController::class, 'search'])->name('front.search');
Route::get('/blog', [frontendController::class, 'blog'])->name('front.blog');
Route::get('/contact-us', [frontendController::class, 'contact'])->name('front.contact');
Route::post('/contact-us', [frontendController::class, 'sendcontact']);
Route::get('/jobs', [frontendController::class, 'about'])->name('front.jobs');
Route::get('/blog/{slug}', [frontendController::class, 'singleblog'])->name('front.singleblog');
Route::get('/categories', [frontendController::class, 'blogcategories'])->name('front.categories');
Route::get('/categories/{slug}', [frontendController::class, 'singlecategories'])->name('front.singlecategories');


Route::prefix('/admin')->group(function(){
  Route::get('/',[backendController::class, 'login']);
  Route::get('/dashboard',[backendController::class, 'dashboard'])->name('dashboard');
  Route::post('/login',[backendController::class, 'checklogin'])->name('login');
  Route::get('/logout',[backendController::class, 'logout'])->name('logout');

  Route::get('/all-blogs',[backendController::class, 'allblogs'])->name('all-blogs');
  Route::get('/add-blog',[backendController::class, 'addblog'])->name('add-blog');
  Route::post('/add-blog',[backendController::class, 'wpaddblog'])->name('wpadd-blog');
  Route::post('/update-blog',[backendController::class, 'UpdateBlog']);
  Route::get('/edit-blog/{id}',[backendController::class, 'editblog']);
  Route::delete('/delete-blog/{id}',[backendController::class, 'DeleteBlog']);
  Route::get('/all-blogs-categories',[backendController::class, 'allcategories'])->name('all-blogs-categories');
  Route::get('/add-blog-category',[backendController::class, 'addcategory'])->name('add-blog-category');
  Route::post('/add-blog-category',[backendController::class, 'wpaddcategory'])->name('wpadd-blog-category');
  Route::post('/update-blog-category',[backendController::class, 'UpdateBlogCategory']);
  Route::get('/edit-blog-categories/{id}',[backendController::class, 'editblogcategories']);
  Route::delete('/delete-blog-categories/{id}',[backendController::class, 'DeleteBlogCategory']);

  Route::get('/post-seo/{id}',[backendController::class, 'postseo'])->name('postseo');
  Route::post('/post-seo',[backendController::class, 'wpaddpostseo']); 

  Route::get('/global-seo',[backendController::class, 'globalseo'])->name('global-seo'); 
  Route::post('/global-seo',[backendController::class, 'wpglobalseo'])->name('wp-global-seo'); 

  Route::get('/admin-info',[backendController::class, 'admininfo'])->name('admin-info'); 
  Route::post('/admin-info',[backendController::class, 'wpadmininfo'])->name('wp-admin-info'); 

  Route::get('/page-seo',[backendController::class, 'pageseo'])->name('page-seo'); 
  Route::get('/add-page',[backendController::class, 'getpage'])->name('add-page'); 
  Route::post('/add-page',[backendController::class, 'addpage']); 
  Route::get('/edit-page/{id}',[backendController::class, 'geteditpage']); 
  Route::post('/update-page',[backendController::class, 'updatepageseo']); 
  Route::get('/delete-page/{id}',[backendController::class, 'deletepageseo']); 

  

});

