@php
    $setting = \App\Models\Setting::find(1);
@endphp

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="{{ $setting->meta_tag }}" />
    <meta name="author" content="{{ $setting->meta_tag }}" />
    <meta name="robots" content="{{ $setting->meta_title }}" />
    <meta name="description" content="{{ $setting->meta_description }}" />

     <!-- FAVICON FILES -->
     <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="apple-touch-icon" sizes="144x144">
     <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="apple-touch-icon" sizes="114x114">
     <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="apple-touch-icon" sizes="72x72">
     <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="apple-touch-icon">
     <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="shortcut icon">
 
    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset("images/settings/$setting->website_logo_dark") }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("images/settings/$setting->website_logo_dark") }}" />
    <!-- PAGE TITLE HERE -->
    <title>Luxury Academy</title>
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Luxury Academy') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome/css/font-awesome.min.css') }}" />
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/loader.min.css') }}">
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.min.css') }}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Price Range Slider -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-slider.min.css') }}" />
    <!-- Color Theme Change Css -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('css/skin/skin-1.css') }}">
    <!-- Side Switcher Css-->
    {{-- <link rel="stylesheet" type="text/css" href="css/switcher.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/settings.css') }}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/navigation.css') }}">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap"
        rel="stylesheet">
    <style>
        .error {
            color: red;
            font-size: 13px;
            margin-top: 5px;
        }
    </style>
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @stack("style")
</head>

<body>
    <div class="page-wraper">

        @yield('content')

        <!-- FOOTER START -->
        @include('includes.footer')
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    </div>

    @include("includes.loader")
    <!-- JAVASCRIPT  FILES ========================================= -->
    {{-- <script  src="{{ asset("js/jquery-1.12.4.min.js") }}"></script><!-- JQUERY.MIN JS --> --}}
    <script src="{{ asset('js/jquery-2.2.4.js') }}"></script>
    <script src="{{ asset("js/parsley.min.js") }}"></script>
    {{-- <script src="{{ asset('js/jquery-validate-1.9.0.min.js') }}"></script> --}}
    <script src="{{ asset('js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script><!-- Form js -->
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('js/waypoints-sticky.min.js') }}"></script><!-- sticky header JS -->
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
    <script src="{{ asset('js/jquery.owl-filter.js') }}"></script>
    <script src="{{ asset('js/stellar.min.js') }}"></script><!-- PARALLAX BG IMAGE   -->
    <script src="{{ asset('js/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('js/jquery.bgscroll.js') }}"></script><!-- BACKGROUND SCROLL -->
    <script src="{{ asset('js/theia-sticky-sidebar.js') }}"></script><!--sticky content-->
    <script src="{{ asset('js/switcher.js') }}"></script><!-- SWITCHER FUCTIONS  -->
    <script src="{{ asset('js/bootstrap-slider.min.js') }}"></script><!-- Price range slider -->
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- REVOLUTION JS FILES -->

    <script src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>
    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script src="{{ asset('js/rev-script-1.js') }}"></script>
    @stack('custom_script')
</body>

</html>
