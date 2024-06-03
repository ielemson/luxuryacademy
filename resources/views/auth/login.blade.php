@php
    $setting = \App\Models\Setting::find(1);
@endphp

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#856d47" />
    <title>Get Access - {{ $setting->website_title }} </title>
    <meta name="author" content="hash360">
    <meta name="description" content="{{ $setting->meta_description }}">
    <meta name="keywords" content="{{ $setting->meta_tag }}">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <style>
        .error{
            color: darkred;
            font-weight: 800;
            font-size: 0.9rem
        }
    </style> --}}
</head>

<body>
    <div class="cursor js-cursor"></div>
    {{-- <div class="preloader">
        <div class="loadbar"></div>
        <!-- end loadbar -->
        <figure> <span>LOADING...</span> </figure>
    </div> --}}
    <!-- end preloader -->
    <div class="page-transition">
        <div class="layer"></div>
        <!-- end layer -->
    </div>
    <!-- end page-transition -->
    <main id="main">
      @include('includes.page-header',["headerTitle"=>"Get Access","headerPara"=>"Make payment to get premium access"])

      <section class="content-section">
        <div class="container">
          <div class="row align-items-center">
            
            <div class="row">
                <div class="col-xl-8 col-md-8 mx-auto">
                    {{-- <form class="">  class="appoint_form" --}}
                      <form action="#" id="getAccessForm" class="appoint_form"
                      method="post">
                      @csrf
                      <div class="title">
                        <h3>Spring Luxury Academy</h3>
                        <p>
                            ENTER YOUR DETAILS BELOW TO GET ACCESS
                        </p>
                    </div>
                      <div class="contact-one">
                          <!-- TITLE START -->
                          {{-- <div class="section-head">
                              <div class="sx-separator-outer separator-left">
                                  <div class="sx-separator bg-white bg-moving bg-repeat-x"
                                      style="background-image:url({{ asset("images/background/cross-line2.png") }})">
                                      <h3 class="sep-line-one text-center">ENTER YOUR DETAILS BELOW TO GET ACCESS
                                      </h3>
                                  </div>
                              </div>
                          </div> --}}
                          <!-- TITLE END -->
                          <div class="row">
                              <div class="form-group col-md-6">
                              <input name="email" id="fname" type="email" required 
                                  placeholder="Enter Email" required>
                                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="form-group col-md-6">
                              <input name="password" id="password" type="password" required 
                                  placeholder="Password" required>
                                  @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                          </div>
                   
                          <div class="col-md-12">
                              <button type="submit" class="site-button btn-full">
                                  <span>Account Login</span>
                              </button>

                          </div>
                          </div>
                        


                      </div>
                  </form>
                </div>
            </div>
              </div>
          </div>
          <!-- end row --> 
        </div>
        <!-- end container --> 
      </section>
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
    {{-- <script src="{{ asset("academy/js/jquery-2.2.4.js") }}"></script> --}}
    {{-- <script src="{{ asset("academy/js/jquery-validate-1.9.0.min.js") }}"></script> --}}
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   


</body>

</html>
