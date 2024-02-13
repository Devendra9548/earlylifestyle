@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/home.css">
@endsection

@section('body')
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="hero-blog first-hero-blog">
                    <a href="/blog/{{ $dbs[0]->slug }}">
                        <figure class="figure">
                            <img src="/blogs/{{ $dbs[0]->file }}" class="figure-img img-fluid rounded img-thumbnail"
                                alt="{{ $dbs[0]->file }}" width="100%">
                            <figcaption class="figure-caption text-start">
                                <div class="title">{{ $dbs[0]->title }}</div>
                                <div class="caption"><a href="/blog/{{ $dbs[0]->bcslug}}">- {{ $dbs[0]->bcname }}</a>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="hero-blog">
                    <a href="/blog/{{ $dbs[1]->slug }}">
                        <figure class="figure">
                            <img src="/blogs-thumb/{{ $dbs[1]->file }}"
                                class="figure-img img-fluid rounded img-thumbnail" alt="{{ $dbs[1]->file }}"
                                width="100%">
                            <figcaption class="figure-caption text-start">
                                <div class="title">{{ $dbs[1]->title }}</div>
                                <div class="caption"><a href="/blog/{{ $dbs[1]->bcslug}}">- {{ $dbs[1]->bcname }}</a>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="hero-blog">
                    <a href="/blog/{{ $dbs[2]->slug }}">
                        <figure class="figure">
                            <img src="/blogs-thumb/{{ $dbs[2]->file }}"
                                class="figure-img img-fluid rounded img-thumbnail" alt="{{ $dbs[2]->file }}"
                                width="100%">
                            <figcaption class="figure-caption text-start">
                                <div class="title">{{ $dbs[2]->title }}</div>
                                <div class="caption"><a href="/blog/{{ $dbs[2]->bcslug}}">- {{ $dbs[2]->bcname }}</a>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="hero-blog">
                    <a href="/blog/{{ $dbs[3]->slug }}">
                        <figure class="figure">
                            <img src="/blogs-thumb/{{ $dbs[3]->file }}"
                                class="figure-img img-fluid rounded img-thumbnail" alt="{{ $dbs[3]->file }}"
                                width="100%">
                            <figcaption class="figure-caption text-start">
                                <div class="title">{{ $dbs[3]->title }}</div>
                                <div class="caption"><a href="/blog/{{ $dbs[3]->bcslug}}">- {{ $dbs[3]->bcname }}</a>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="hero-blog">
                    <a href="/blog/{{ $dbs[4]->slug }}">
                        <figure class="figure">
                            <img src="/blogs-thumb/{{ $dbs[4]->file }}"
                                class="figure-img img-fluid rounded img-thumbnail" alt="{{ $dbs[4]->file }}"
                                width="100%">
                            <figcaption class="figure-caption text-start">
                                <div class="title">{{ $dbs[4]->title }}</div>
                                <div class="caption"><a href="/blog/{{ $dbs[4]->bcslug}}">- {{ $dbs[4]->bcname }}</a>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="catsec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-left fs-1 mb-5 ms-3"> Our Categories <a href="/categories"
                        class="btn btn-light text-dark fs-5 fw-bold px-3 py-2 ms-3">View All <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="hero-section-slider">
                    @foreach($cblog as $cblog)
                    <div class="px-2"><a href="/categories/{{ $cblog->bcslug }}">
                            <img src="/blogs/{{ $cblog->bcfile }}" alt="{{ $cblog->bcfile }}" width="100%"
                                class="img-thumbnail">
                            <p class="fs-4 text-center">{{ $cblog->bcname }}</p>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blogssec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-left fs-1 mb-5"> {{ $c2->bcname }} 
                <a href="/categories/{{ $c2->bcslug }}" class="btn btn-light text-dark fs-5 fw-bold px-3 py-2 ms-3">View All <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a></h2>
            </div>
        </div>
        <div class="row">
            @foreach($firstBlog as $firstBlog)
            <div class="col-12 col-md-3">
                <div class="all-listing-blogs">
                    <div class=""><a href="/blog/{{ $firstBlog->slug }}">
                            <img src="/blogs-thumb/{{ $firstBlog->file }}" alt="{{ $firstBlog->file }}" width="100%"
                                class="img-thumbnail">
                            <p class="fs-4 text-center">{{ $firstBlog->title }}</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12">

            </div>
        </div>
    </div>
</section>
<section class="blogssec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-left fs-1 mb-5"> {{ $c1->bcname }} 
                <a href="/categories/{{ $c1->bcslug }}" class="btn btn-light text-dark fs-5 fw-bold px-3 py-2 ms-3">View All <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a></h2>
            </div>
        </div>
        <div class="row">
            @foreach($secondBlog as $firstBlog)
            <div class="col-12 col-md-3">
                <div class="all-listing-blogs">
                    <div class=""><a href="/blog/{{ $firstBlog->slug }}">
                            <img src="/blogs-thumb/{{ $firstBlog->file }}" alt="{{ $firstBlog->file }}" width="100%"
                                class="img-thumbnail">
                            <p class="fs-4 text-center">{{ $firstBlog->title }}</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12">

            </div>
        </div>
    </div>
</section>

<section class="blogssec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-left fs-1 mb-5"> {{ $c3->bcname }} 
                <a href="/categories/{{ $c3->bcslug }}" class="btn btn-light text-dark fs-5 fw-bold px-3 py-2 ms-3">View All <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a></h2>
            </div>
        </div>
        <div class="row">
            @foreach($thirdBlog as $firstBlog)
            <div class="col-12 col-md-3">
                <div class="all-listing-blogs">
                    <div class=""><a href="/blog/{{ $firstBlog->slug }}">
                            <img src="/blogs-thumb/{{ $firstBlog->file }}" alt="{{ $firstBlog->file }}" width="100%"
                                class="img-thumbnail">
                            <p class="fs-4 text-center">{{ $firstBlog->title }}</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12">

            </div>
        </div>
    </div>
</section>

<section class="blogssec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-left fs-1 mb-5"> {{ $c4->bcname }} 
                <a href="/categories/{{ $c4->bcslug }}" class="btn btn-light text-dark fs-5 fw-bold px-3 py-2 ms-3">View All <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a></h2>
            </div>
        </div>
        <div class="row">
            @foreach($fourthBlog as $firstBlog)
            <div class="col-12 col-md-3">
                <div class="all-listing-blogs">
                    <div class=""><a href="/blog/{{ $firstBlog->slug }}">
                            <img src="/blogs-thumb/{{ $firstBlog->file }}" alt="{{ $firstBlog->file }}" width="100%"
                                class="img-thumbnail">
                            <p class="fs-4 text-center">{{ $firstBlog->title }}</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12">

            </div>
        </div>
    </div>
</section>




@endsection

@section('customjs')
<script src="/assets/js/front/home.js"></script>
@endsection