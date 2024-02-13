@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/blog.css">
@endsection
@section('body')
<div class="container-fluid bg-dark" style="margin-top: -26px">
    <div class="container">
    <div class="row">
        <div class="col-12">
            <p style="margin:0px" class="py-3"><a href="/">Home</a> » <a href="#">Our Blogs</a></p>
        </div>
    </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-3">
                <div class="blog-single"><a href="/blog/{{ $blog->slug }}">
                        <img src="/blogs-thumb/{{ $blog->file }}" alt="{{ $blog->file }}" width="100%"
                            class="img-thumbnail">
                        <p class="fs-4 text-center">{{ $blog->title }}</p>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
        <div id="navMenu" class="mt-5 text-center">
            @if($blogs->lastPage() > 1)
            {{ $blogs->links() }}
            @endif
        </div>
    </div>
</section>
@endsection