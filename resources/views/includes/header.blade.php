@php
$setting = \App\Models\Setting::find(1);
@endphp

 <!-- HEADER START -->
  <header class="site-header header-style-1 nav-wide mobile-sider-drawer-menu">
    <div class="top-bar bg-gray">
        <div class="container">
            <div class="d-flex justify-content-end">
                <ul class="list-unstyled e-p-bx">
                    <li><span>Mail us:</span> {{ $setting->email }}</li>
                    <li><span>Call us:</span>{{ $setting->phone }}</li>
                </ul>
            </div>
        </div>
    </div>  
    <div  class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar header-left-gray-block bg-white">
            <div class="container clearfix">
                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="index.html">
                            <img src="images/logo.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <!-- NAV Toggle Button -->
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button>
                
                    <!-- EXTRA NAV -->
                    <div class="extra-nav">
                        <div class="extra-cell">											
                            <a href="#search">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                        <div class="extra-cell">
                            <div class="contact-slide-show"><a href="{{ route("contact") }}" class="get-in-touch-btn from-top">Get in touch</a></div>
                        </div>                                                                   
                    </div>
                    <!-- EXTRA Nav -->
                                            
                    <!-- MAIN NAVIGATION -->
                    <div class="header-nav nav-dark navbar-collapse collapse justify-content-start collapse">
                        <ul class=" nav navbar-nav">
                            <li class="active">
                                <a href="{{ url("/") }}">Home</a>
                                                                                   
                            </li>

                            <li>
                                <a href="{{ route("about") }}">About us</a>
                                                                             
                            </li>

                            <li>
                                <a href="javascript:;">Services</a>
                            
                            </li>
                            <li>
                                <a href="{{ route("payment") }}">Register</a>
                            
                            </li>
                                                                                                                                                                                                                                                                                                              

                            <li><a href="javascript:;">FAQ</a></li>
                            <li><a href="{{ route("contact") }}">Contact us</a></li>                                    
                       
                        </ul>
                    </div>
                                            
                    <!-- CONTACT -->                            
                     <div class="contact-slide-hide" style="background-image:url(images/background/bg-map.png)">
                        <div class="contact-nav">
                             <a href="javascript:void(0)" class="contact_close">&times;</a>
                             <div class="contact-nav-form">
                                 <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                    
                                        <div class=" contact-nav-info">
                             
                                            <div class="sx-icon-box-wraper left p-b30">
                                                <div class="icon-xs inline-icon m-b20 scale-in-center"><i class="fa fa-phone"></i></div>
                                                <div class="icon-content">
                                                    <h6 class="m-t0">Phone number</h6>
                                                    <p>{{ $setting->phone }}</p>
                                                </div>
                                            </div>
                                            
                                            <div class="sx-icon-box-wraper left p-b30">
                                                <div class="icon-xs inline-icon m-b20 scale-in-center"><i class="fa fa-envelope"></i></div>
                                                <div class="icon-content">
                                                    <h6 class="m-t0">Email address</h6>
                                                    <p>{{ $setting->email }}</p>
                                                </div>
                                            </div>
                                            
                                            <div class="sx-icon-box-wraper left p-b30">
                                                <div class="icon-xs inline-icon m-b20 scale-in-center"><i class="fa fa-map-marker"></i></div>
                                                <div class="icon-content">
                                                    <h6 class="m-t0">Address info</h6>
                                                    <p>{{ $setting->address }}</p>
                                                </div>
                                            </div>
                                            
                                            <div class="full-social-bg">
                                                  <ul>
                                                        <li><a href="{{ $setting->facebook }}" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        {{-- <li><a href="#" class="google"><i class="fa fa-google"></i></a></li> --}}
                                                        <li><a href="{{ $setting->instagram }}" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                                        {{-- <li><a href="#" class="tumblr"><i class="fa fa-tumblr"></i></a></li> --}}
                                                        <li><a href="{{ $setting->twitter }}" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                        {{-- <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li> --}}
                                                  </ul>
                                            </div>
                                            
                                         </div>     
                                      
                                    </div>                                          


                                    <div class="col-xl-6 col-lg-6 col-md-12 ">
                                        <div class="contact-nav-field shadow-lg p-a30 bg-white" style="background-image:url(images/background/bg-map.png)">
                                        <form class="cons-contact-form2 form-transparent" method="post" action="https://theme7x.com/inteshape/form-handler2.php">
                                          
                                            <div class="input input-animate">
                                                <label for="name">Name</label>
                                                <input type="text" name="username" id="name" required>
                                                <span class="spin"></span>
                                            </div>
                                            
                                            <div class="input input-animate">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" id="email" required>
                                                <span class="spin"></span>
                                            </div> 
                                            
                                            <div class="input input-animate">
                                                <label for="Phone">Phone</label>
                                                <input type="text" name="phone" id="Phone" required>
                                                <span class="spin"></span>
                                            </div>   
                                            
                                            <div class="input input-animate">
                                                <label for="message">Textarea</label>
                                                <textarea name="message" id="message" required></textarea>
                                                <span class="spin"></span>
                                            </div>
                                            
                                            <div class="text-left p-t10">
                                                <button type="submit" class="site-button-secondry btn-half ">
                                                 <span>  Submit Now</span>
                                                </button>
                                            </div>    
                                        </form>
                                        </div>
                                    </div>  
                                 </div>                                                                                                           			
                             </div>
                              
                        
                        </div> 
                    </div> 
                                                  
                 
            </div>
        </div>
    </div>
</header>
<!-- HEADER END -->