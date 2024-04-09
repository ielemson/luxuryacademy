@php
    $setting = \App\Models\Setting::find(1);
@endphp

@extends("layouts.app")

@section("content")
@include("includes.header")

<!-- CONTENT START -->
<div class="page-content">

        

    <!-- INNER PAGE BANNER -->

    <div class="sx-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(images/banner/9.jpg);">

        <div class="overlay-main bg-black opacity-07"></div>

        <div class="container">

            <div class="sx-bnr-inr-entry">

                <div class="banner-title-outer">

                    <div class="banner-title-name">

                        <h2 class="m-tb0">Contact Us Form</h2>

                        <p>The essence of interior design will always be about people and how they live. It is about the realities of what makes for an attractive, civilized.</p>

                    </div>

                </div>

                <!-- BREADCRUMB ROW -->                            

                

                    <div>

                        <ul class="sx-breadcrumb breadcrumb-style-2">

                            <li><a href="javascript:void(0);">Home</a></li>

                            <li>Contact us</li>

                        </ul>

                    </div>

                

                <!-- BREADCRUMB ROW END -->                        

            </div>

        </div>   

    </div>

    <!-- INNER PAGE BANNER END -->

     

    <!-- SECTION CONTENTG START -->

    <div class="section-full p-tb80 inner-page-padding">

        <!-- LOCATION BLOCK-->

        <div class="container">

        

            <!-- GOOGLE MAP & CONTACT FORM -->

            <div class="section-content">

                <!-- CONTACT FORM-->

                <div class="row">

                    <div class="col-lg-8 col-md-12 col-sm-12">

                        <form class="contact-form cons-contact-form bg-gray p-a30" method="post" action="https://theme7x.com/inteshape/form-handler.php">

                            <div class="contact-one">

                            

                                <!-- TITLE START -->

                                <div class="section-head">

                                    <div class="sx-separator-outer separator-left">

                                        <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(images/background/cross-line2.png)">

                                            <h3 class="sep-line-one">Form</h3>

                                        </div>

                                    </div>

                                </div>                                        

                                <!-- TITLE END -->                                     

                                                                

                                <div class="form-group">

                                    <input name="username" type="text" required class="form-control" placeholder="Name">

                                </div>

                           

                                <div class="form-group">

                                    <input name="email" type="text" class="form-control" required placeholder="Email">

                                </div>

                           

                                <div class="form-group">

                                    <textarea name="message" rows="4" class="form-control " required placeholder="Message"></textarea>

                                </div>

                            

                                <div class="text-right">

                                    <button name="submit" type="submit" value="Submit" class="site-button btn-half"><span> submit</span>

                                            

                                    </button>

                                </div>



                            </div>

                        </form>

                    </div>                        

                    <div class="col-lg-4 col-md-12 col-sm-12">

                        <div class="contact-info block-shadow bg-white bg-center p-a40" style="background-image:url(images/background/bg-map.png)">



                            <div>

                                <!-- TITLE START -->

                                <div class="section-head">

                                    <div class="sx-separator-outer separator-left">

                                        <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(images/background/cross-line2.png)">

                                            <h3 class="sep-line-one">Info</h3>

                                        </div>

                                    </div>

                                </div>                                        

                                <!-- TITLE END -->                                                                    

                                <div class="sx-icon-box-wraper left p-b30">

                                    <div class="icon-xs"><i class="fa fa-phone"></i></div>

                                    <div class="icon-content">

                                        <h5 class="m-t0">Phone number</h5>

                                        <p>{{ $setting->phone }}</p>

                                    </div>

                                </div>

                                

                                <div class="sx-icon-box-wraper left p-b30">

                                    <div class="icon-xs"><i class="fa fa-envelope"></i></div>

                                    <div class="icon-content">

                                        <h5 class="m-t0">Email address</h5>

                                        <p>{{ $setting->email }}</p>

                                    </div>

                                </div>

                                

                                <div class="sx-icon-box-wraper left">

                                    <div class="icon-xs"><i class="fa fa-map-marker"></i></div>

                                    <div class="icon-content">

                                        <h5 class="m-t0">Address info</h5>

                                        <p>{{ $setting->address }}</p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>                        

                </div>

            </div>

            

            

        </div>

   </div>

           

    <!-- SECTION CONTENT END -->

</div>

<!-- CONTENT END -->  


@endsection