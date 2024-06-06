@php
$setting = \App\Models\Setting::find(1);
@endphp

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#856d47" />
    <title>Home - {{ $setting->website_title }} </title>
    <meta name="author" content="hash360">
    <meta name="description" content="{{ $setting->meta_description }}">
    <meta name="keywords" content="{{ $setting->meta_tag }}">
 <!-- FAVICON FILES -->
 <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="apple-touch-icon" sizes="144x144">
 <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="apple-touch-icon" sizes="114x114">
 <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="apple-touch-icon" sizes="72x72">
 <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="apple-touch-icon">
 <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="shortcut icon">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="SpringLuxury Academy">
    {{-- <meta property="og:image" content="preview.html"> --}}
    <meta property="og:site_name" content="{{ $setting->website_title }}">
    <meta property="og:title" content="{{ $setting->website_title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://springluxuryacademy.com/">


    <!-- FAVICON FILES -->
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
    <link href="ico/favicon.png" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('spring/css/lineicons.css') }}">
    <link rel="stylesheet" href="{{ asset('spring/css/datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('spring/css/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('spring/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('spring/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('spring/css/style.css') }}">
</head>

<body>
    <div class="cursor js-cursor"></div>
    <div class="preloader">
        <div class="loadbar"></div>
        <!-- end loadbar -->
        <figure> <span>LOADING...</span> </figure>
    </div>
    
    <!-- end preloader -->
    <div class="page-transition">
        <div class="layer"></div>
        <!-- end layer -->
    </div>
    <!-- end page-transition -->

    <main id="main">
      @include('includes.header')

        @yield("content")
        <!-- end content-section -->
        @include('includes.footer')
        <!-- end footer -->
    </main>

    <!-- JS FILES -->
    <script src="{{ asset('spring/js/jquery.min.js') }}"></script>
    <script src="{{ asset("js/parsley.min.js") }}"></script>
    <script src="{{ asset('spring/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('spring/js/fancybox.min.js') }}"></script>
    <script src="{{ asset('spring/js/swiper.min.js') }}"></script>
    <script src="{{ asset('spring/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('spring/js/smooth-scrollbar.js') }}"></script>
    <script src="{{ asset('spring/js/overscroll.js') }}"></script>
    <script src="{{ asset('spring/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('spring/js/scripts.js') }}"></script>
</body>

</html>
