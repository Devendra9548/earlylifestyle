<!DOCTYPE html>
<html lang="en">

<head>
@if(!empty($pageseo[0]->title))
<title>{{ $pageseo[0]->title }}</title>
@endif
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

@if(!empty($pageseo[0]->description))
<meta name="description" content="{{ $pageseo[0]->description }}">
<meta name="keywords" content="{{ $pageseo[0]->keywords }}">
<meta name="author" content="{{ $pageseo[0]->author }}">
@if($pageseo[0]->slug == 'home')
<link rel="canonical" href="{{ url('/') }}" />
@else
<link rel="canonical" href="{{ url('/') }}/{{$pageseo[0]->slug}}" />
@endif
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $pageseo[0]->title }}" />
<meta property="og:description" content="{{ $pageseo[0]->description }}" />
@if($pageseo[0]->slug == 'home')
<meta property="og:url" content="{{ url('/') }}" />
@else
<meta property="og:url" content="{{ url('/') }}/{{$pageseo[0]->slug}}" />
@endif
<meta property="og:site_name" content="{{ $gseo->sitename }}" />
<meta property="article:publisher" content="{{ $gseo->facebook }}" />
<meta property="article:published_time" content="{{ $pageseo[0]->created_at }}" />
<meta property="article:modified_time" content="{{ $pageseo[0]->updated_at }}" />
<meta property="og:image" content="{{ url('/') }}/pages/{{$pageseo[0]->file}}" />
<meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="720" />
<meta property="og:image:type" content="image/webp" />
@endif
@if(!empty($pageseo[0]->smarkup))
{!! $pageseo[0]->smarkup !!}
@endif
<link rel="stylesheet" href="/assets/css/front/header.css">
<link rel="stylesheet" href="/assets/css/front/footer.css">
@yield('customcss')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="/assets/css/front/style.css" rel="stylesheet">
<link href="/assets/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/assets/css/slick.css" />
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <x-header />
    @yield('body')
    <x-footer />


    <script type="text/javascript" src="/assets/js/slick.min.js"></script>
    <script type="text/javascript" src="/assets/js/front/footer.js"></script>
    <script type="text/javascript" src="/assets/js/all.min.js"></script>
    
    @yield('customjs')

</body>

</html>