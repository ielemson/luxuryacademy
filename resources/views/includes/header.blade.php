<nav class="hamburger-navigation">
    <div class="layer"></div>
    <!-- end layer -->
    <div class="container">
        <ul class="nav-menu mobile-menu">
            <li><a href="{{ url("/") }}">Home</a></li>
            <li><a href="{{ route("payment") }}">Get Access</a></li>
            <li><a href="{{ route("contact") }}">Contact Us</a></li>
        </ul>
        <ul class="nav-menu">
            <li><a href="{{ url("/") }}">Home</a></li>
            <li><a href="{{ route("payment") }}">Get Access</a></li>
            <li><a href="{{ route("contact") }}">Contact Us</a></li>
        </ul>
        <div class="info-box"> <span>Follow us on Social Media</span>
            <ul class="nav-social">
                <li><a href="{{ $setting->facebook }}"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="{{ $setting->twitter }}"><i class="lni lni-twitter-original"></i></a></li>
                <li><a href="{{ $setting->instagram }}"><i class="lni lni-instagram"></i></a></li>
                <li><a href="{{ $setting->youtube }}"><i class="lni lni-youtube"></i></a></li>
                {{-- <li><a href="#"><i class="lni lni-pinterest"></i></a></li> --}}
            </ul>
        </div>
        <!-- end info-box -->
    </div>
    <!-- end container -->
</nav>
<!-- end hamburger-navigation -->
<nav class="navbar">
    <div class="container">
        <div class="logo"> <a href="{{ url("/") }}"><img src="{{ asset("images/settings/$setting->website_logo_dark") }}" alt="Image"></a> </div>
        <!-- end logo -->
        <div class="navbar-text">{{ $setting->phone }}</div>
        <!-- end navbar-text -->
        <div class="site-menu">
            <ul>
                <li><a href="{{ url("/") }}">Home</a></li>
                <li><a href="{{ route("payment") }}">Get Access</a></li>
                <li><a href="{{ route("contact") }}">Contact Us</a></li>
            </ul>
        </div>
        <!-- end site-menu -->
        <div class="hamburger-menu">
            <button class="menu">
                <svg width="45" height="45" viewBox="0 0 100 100">
                    <path class="line line1"
                        d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3"
                        d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                </svg>
            </button>
        </div>
        <!-- end hamburger-menu -->
    </div>
    <!-- end container -->
</nav>

{{-- HEADER SLIDER :::::::::::::::::::: --}}
<!-- end navbar -->
<header class="slider">
    <div class="main-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-inner" data-background="{{ asset("media/images/6.jpg") }}">
                    <div class="container">
                        <h6 data-swiper-parallax="100">Welcome to Spring Luxury Academy</h6>
                        <h1 data-swiper-parallax="200"> Learn from Industry Experts and Gain Practical Skills</h1>
                        <a href="{{ route("payment") }}" data-swiper-parallax="200">GET ACCESS FOR JUST  ₦@money($setting->training_cost)</a>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end slide-inner -->
            </div>  
        </div>
        <!-- end swiper-wrapper -->
        <div class="slider-prev"></div>
        <!-- end slider-prev -->
        <div class="slider-next"></div>
        <!-- end slider-next -->
        <div class="slider-fraction"></div>
        <!-- end slider-fraction -->
    </div>
    <!-- end main-slider -->
    <div class="scroll-down"></div>
    <!-- end scroll-down -->
</header>
<!-- end slider -->