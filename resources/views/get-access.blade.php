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
    <link rel="stylesheet" href="{{ asset('spring/css/get-access.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"
        integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
      @include('includes.page-header',["headerTitle"=>"Get Access","headerPara"=>"Make payment to get premium access"])

      <section class="content-section">
        <div class="container">
          <div class="align-items-center">
           
            <div class="row">
                <div class="col-xl-8 col-md-8 mx-auto">
                     @include('partials.alert')
                    {{-- <form class="">  class="appoint_form" --}}
                      <form action="#" id="getAccessForm" class="appoint_form"
                      method="post">
                      @csrf
                      <div class="title">
                        <h3>Spring Luxury Academy</h3>
                        <p>
                            ENTER YOUR DETAILS BELOW TO REGISTER
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
                              <input name="fname" id="fname" type="text" required 
                                  placeholder="First Name" required>
                          </div>
                          <div class="form-group col-md-6">
                              <input name="lname" id="lname" type="text" required 
                                  placeholder="Last Name" required>
                          </div>

                          <div class="form-group col-md-6">
                              <input name="email" id="email" type="email"  required
                                  placeholder="Email">
                          </div>

                          <div class="form-group col-md-6">
                              <input name="username" id="username" type="text"  required
                                  placeholder="Telegram Username">
                          </div>
                          <div class="form-group col-md-6">
                              <input name="phone" id="phone" type="text"  required
                                  placeholder="Phone Number">
                          </div>

                          <div class="form-group col-md-6">
                              <input name="state" id="state" type="text"  required
                                  placeholder="State / Province">
                          </div>
                          <div class="form-group col-md-6">
                              <select name="country" id="country"  id="country" required>
                                  <option value="">Select Country</option>
                                  @foreach ($countries as $country)
                                      <option value="{{ $country->country_name }}">{{ $country->country_name }}
                                      </option>
                                  @endforeach

                              </select>
                          </div>
                          <div class="form-group col-md-6">
                              <input name="course" type="text" 
                                  placeholder="{{ $setting->training_title }} -  ₦@money($setting->training_cost)" disabled>
                          </div>
                          {{-- <input type="hidden" name="quantity" value="1"> --}}
                          <input type="hidden" name="reference" id="reference">
                          <input type="hidden" name="status" id="status">
                          <input type="hidden" name="message" id="message">
                          <input type="hidden" name="amount" id="amount"
                              value="{{ $setting->training_cost }}">
                          {{-- <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> --}}

                          <div class="col-md-12">
                              <button type="submit" class="site-button btn-full">
                                  <span> REGISTER FOR ₦@money($setting->training_cost)</span>
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
    <script src="{{ asset('spring/js/get-access.js') }}"></script>
    {{-- <script src="{{ asset("academy/js/jquery-2.2.4.js") }}"></script> --}}
    {{-- <script src="{{ asset("academy/js/jquery-validate-1.9.0.min.js") }}"></script> --}}
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
    integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
