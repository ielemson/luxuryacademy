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
    <style>
        .error {
            color: darkred;
            font-weight: 800;
            font-size: 0.9rem
        }
    </style>
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
        @include('includes.page-header', [
            'headerTitle' => 'Contact Us',
            'headerPara' => 'We would love to hear from you',
        ])

        <!-- end page-header -->
        <section class="content-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 mx-auto">
                        <div class="section-title">
                            <h6>DON'T HESITATE PLEASE</h6>
                            <h2>We would love to hear from you</h2>
                        </div>
                        <!-- end section-title -->
                        <div class="contact-form">
                            <div class="form-group">
                                <input type="text" placeholder="Your Name">
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" placeholder="Your E-mail">
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" placeholder="Phone Number">
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <textarea placeholder="Your Message"></textarea>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="submit" value="SEND MESSAGE">
                            </div>
                            <!-- end form-group -->
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
    <script src="{{ asset('spring/js/jquery.min.js') }}"></script>
    <script src="{{ asset('spring/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('spring/js/fancybox.min.js') }}"></script>
    <script src="{{ asset('spring/js/swiper.min.js') }}"></script>
    <script src="{{ asset('spring/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('spring/js/smooth-scrollbar.js') }}"></script>
    <script src="{{ asset('spring/js/overscroll.js') }}"></script>
    <script src="{{ asset('spring/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('spring/js/scripts.js') }}"></script>
    {{-- <script src="{{ asset("academy/js/jquery-2.2.4.js") }}"></script> --}}
    <script src="{{ asset('academy/js/jquery-validate-1.9.0.min.js') }}"></script>
    {{-- @push('custom_script') --}}
    <script>
        if ($("#ajax-contact-form").length > 0) {
            $("#ajax-contact-form").validate({
                rules: {
                    fname: {
                        required: true,
                        // maxlength: 50
                    },
                    lname: {
                        required: true,
                        // maxlength: 50
                    },
                    email: {
                        required: true,
                        maxlength: 50,
                        email: true,
                    },
                    username: {
                        required: true,
                        // maxlength: 100
                    },
                    phone: {
                        required: true,
                        // maxlength: 300
                    },
                    state: {
                        required: true,
                        // maxlength: 300
                    },
                    country: {
                        required: true,
                        // maxlength: 300
                    },
                },
                messages: {
                    fname: {
                        required: "Please first enter name",
                        maxlength: "Your name maxlength should be 50 characters long."
                    },
                    lname: {
                        required: "Please enter last name",
                        maxlength: "Your name maxlength should be 50 characters long."
                    },
                    email: {
                        required: "Please enter valid email",
                        email: "Please enter valid email",
                        maxlength: "The email name should less than or equal to 50 characters",
                    },
                    username: {
                        required: "Please enter username",
                        maxlength: "Your subject maxlength should be 100 characters long."
                    },
                    phone: {
                        required: "Please enter phone number",
                    },
                    state: {
                        required: "Please enter your state",
                    },
                    country: {
                        required: "Please enter your country",
                    },
                },
                submitHandler: function(form) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $('#submit').html('Please Wait...');
                    $("#submit").attr("disabled", true);

                    $.ajax({
                        url: "{{ url('payment/authenticate') }}",
                        type: "POST",
                        data: $('#ajax-contact-form').serialize(),
                        success: function(response) {
                            console.log(response)
                            //   $('#submit').html('Submit');
                            //   $("#submit"). attr("disabled", false);
                            //   alert('Ajax form has been submitted successfully');
                            //   document.getElementById("ajax-contact-form").reset(); 
                        }
                    });
                }
            })
        }
    </script>
    {{-- @endpush --}}
</body>

</html>
