@extends('templates.front.singleblog')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-8 ps-4 pe-3">
            <div class="feature-image">
                <img src="/blogs/{{ $blog->file }}" width="100%" alt="{{ $blog->file }}" class="img-thumbnail">
            </div>
            <h1 class="mt-4">{{ $blog->title }}</h1>
            <hr>
            <a href="#"><b>Category :</b> {{ $cblog[0]->bcname }}</a><br><a href="#"> <b>Publish Date :</b>
                {{ $blog->created_at }}</a><br><a href="#"> <b>Publisher Name :</b> EarlyLifeStyle</a>
            {!! $blog->description !!}

        </div>
        <div class="col-4 ps-5 pe-5">
            <form action="/search" method="GET" style="position:relative">
                <input type="text" class="form-control fs-5 fw-bold" placeholder="Search Blogs" name="s">
                <button type="submit" class="bg bg-primary"
                    style="position: absolute;top: 0px;right: 0px;height: 100%;border: 0px;border-radius: 5px;"><i
                        class="fa-brands fa-searchengin"
                        style="padding: 0px 8px;font-size: 26px;color: #fff;position: relative;top: 2px;"></i></button>
            </form><br>
            <a href="" target="_blank" class=""><img src="/assets/imgs/google-news.webp" alt="google-news" width="100%"></a><br>
            <h2 class="mt-3 mb-3">Related Posts</h2>
            @foreach($cblog as $allblogs)
            @if($allblogs->title == $blog->title)
            @continue;
            @endif
            <a href="/blog/{{ $allblogs->slug }}">
                <div class="related-posts d-flex align-items-center mb-3">
                    <img src="/recent-blogs-thumb/{{ $blog->file }}" alt="{{ $blog->file }}">
                    <p style="margin-left:10px">
                        {{ Illuminate\Support\Str::limit($allblogs->title, $limit = 57, $end = '...') }}</p>
                </div>
            </a>

            @endforeach

        </div>
    </div>
</div>
@endsection