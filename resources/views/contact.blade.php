@php
    $setting = \App\Models\Setting::find(1);
@endphp

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#856d47" />
    <title>Contact Us - {{ $setting->website_title }} </title>
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
    <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="apple-touch-icon" sizes="144x144">
    <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="apple-touch-icon">
    <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('spring/css/lineicons.css') }}">
    <link rel="stylesheet" href="{{ asset('spring/css/datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('spring/css/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('spring/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('spring/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('spring/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <style>
        .parsley-required {
            color: darkred;
            font-weight: 800;
            font-size: 0.9rem;
            list-style: none;
        }

        .spinner-border {
            display: none;
            width: 1.5rem; /* Custom size */
            height: 1.5rem; /* Custom size */
        }
    </style>
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
        @include('includes.page-header', [
            'headerTitle' => 'Contact Us',
            'headerPara' => 'We would love to hear from you',
        ])

        <!-- end page-header -->
        <section class="content-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto">
                        <div class="section-title">
                            <h6>DON'T HESITATE PLEASE</h6>
                            <h2>We would love to hear from you</h2>
                        </div>
                        <!-- end section-title -->
                        <div class="contact-form">
                          
                            <form id="contactForm" data-parsley-validate>
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your First Name" name="fname" class=" @error('fname') is-invalid @enderror" value="{{old('fname')}}" required>
                                        @error('fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Last Name" name="lname" class=" @error('lname') is-invalid @enderror" value="{{old('lname')}}" required>
                                        @error('lname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email Address" name="email" class=" @error('email') is-invalid @enderror" required value="{{old('email')}}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Phone" name="phone" id="phone" class=" @error('phone') is-invalid @enderror" value="{{old('phone')}}" required>
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    {{-- <div class="form-group">
                                            <span>{!! captcha_img() !!}</span>
                                            <button type="button" class="btn btn-danger" class="btn-refresh" id="reload">
                                                &#x21bb;   
                                        </div>
                                        <input type="text" placeholder="Enter Captcha Here" class="form-control" id="captcha" name="captcha" required data-parsley-required-message="Captcha is required">
                                    </div> --}}
                                    <div class="form-group">
                                        {{-- <label for="captcha">Captcha:</label> --}}
                                        {{-- <div>
                                            <img src="{{ captcha_src('math') }}" class="captcha-img" alt="captcha">
                                            <button type="button" class="btn btn-secondary btn-refresh">Refresh</button>
                                        </div> --}}
                                        <div class="captcha">
                                            <span>{!! captcha_img() !!}</span>
                                            {{-- <button type="button" class="btn btn-danger" class="reload" id="reload">
                                                &#x21bb;
                                            </button> --}}
                                            <button type="button" class="btn btn-secondary" id="btn-refresh">Refresh</button>
                                        </div>

                                        <input type="text" class="form-control" id="captcha" name="captcha" required data-parsley-required-message="Captcha is required">
                                    </div>
                                </div>
                              
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message_body" placeholder="Write a Comment" class=" @error('message_body') is-invalid @enderror" required></textarea>
                                            @error('message_body')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                   
                                    <div class="contact-three__btn-box">
                                        <button type="submit" class="thm-btn contact-three__btn">Send message<span
                                        class="icon-dabble-arrow-right"></span>
                                            &nbsp;
                                        <div class="spinner-border text-info text-sm" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>

                                      </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="formResponse"></div>
                        </div>
                        <!-- end contact-form -->
                    </div>
                    <!-- end col-4 -->
                   @if (!empty($setting->address))
                   <div class="col-xl-12 col-lg-12">
                    <div class="contact-box">
                        <h6>Lagos, Nigeria</h6>
                        <address>
                            {{ $setting->address }}
                            {{-- <strong>New York / USA</strong> --}}
                        </address>
                    </div>
                    <!-- end contact-box -->
                </div>
                   @endif
                    <!-- end col-7 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>

        @include('includes.footer')
        <!-- end footer -->
    </main>

    <!-- JS FILES -->
    {{-- <script src="{{ asset('spring/js/jquery.min.js') }}"></script> --}}
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="{{ asset('spring/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('spring/js/fancybox.min.js') }}"></script>
    <script src="{{ asset('spring/js/swiper.min.js') }}"></script>
    <script src="{{ asset('spring/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('spring/js/smooth-scrollbar.js') }}"></script>
    <script src="{{ asset('spring/js/overscroll.js') }}"></script>
    <script src="{{ asset('spring/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('spring/js/scripts.js') }}"></script>

    <script>
         $(document).ready(function() {
            $('#btn-refresh').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });

            $('#contactForm').on('submit', function(event) {
                event.preventDefault();

                if ($(this).parsley().isValid()) {
                    $('.spinner-border').show(); // Show spinner

                    $.ajax({
                        url: '{{ route('contact.send') }}',
                        method: 'POST',
                        data: $(this).serialize(),
                        success: function(response) {
                            swal("Success!", response.message, "success");
                            $('#contactForm')[0].reset();
                            $('.btn-refresh').click(); // Refresh captcha image
                            $('.spinner-border').hide(); // Hide spinner
                        },
                        error: function(response) {
                            var errors = response.responseJSON.errors;
                            var errorMessage = "";
                            $.each(errors, function(key, value) {
                                errorMessage += value[0] + "\n";
                            });
                            swal("Error!", errorMessage, "error");
                            $('.spinner-border').hide(); // Hide spinner
                        }
                    });
                } else {
                    $(this).parsley().on('field:error', function() {
                        var errors = this.getErrorsMessages();
                        swal("Validation Error", errors.join("\n"), "error");
                    });
                }
            });
        });
    </script>
          
</body>

</html>
