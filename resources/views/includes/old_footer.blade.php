<footer class="site-footer footer-large  footer-dark	footer-wide">
    
    <!-- FOOTER BLOCKES START -->  
    <div class="footer-top overlay-wraper">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="row">
                <!-- ABOUT COMPANY -->
                <div class="col-lg-4 col-md-6 col-sm-6">  
                    <div class="widget widget_about">
                        <!--<h4 class="widget-title">About Company</h4>-->
                        <div class="logo-footer clearfix p-b15">
                            <a href="{{ url("/") }}"><img src="{{ asset("images/settings/$setting->website_logo_dark") }}" alt="logo"></a>
                        </div>
                        <p>
                            {{ $setting->meta_description }}
                        </p>                                 
                        
                        <ul class="social-icons  sx-social-links">
                            {{-- <li><a href="javascript:void(0);" class="fa fa-behance"></a></li> --}}
                            <li><a href="{{ $setting->facebook }}" class="fa fa-facebook"></a></li>
                            {{-- <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li> --}}
                            <li><a href="{{ $setting->instagram }}" class="fa fa-instagram"></a></li>
                        </ul>                                     
                    </div>
                </div> 
                
                <!-- RESENT POST -->
                
                                     
                <!-- USEFUL LINKS -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="widget widget_services inline-links">
                        <h5 class="widget-title">Useful links</h5>
                        <ul>
                            <li><a href="{{ route("about") }}">About</a></li>
                            <li><a href="{{ url("/") }}">Services</a></li>
                            {{-- <li><a href="{{ url("/") }}">Projects</a></li> --}}
                            {{-- <li><a href="blog-/">Blog</a></li> --}}
                            <li><a href="{{ route("contact") }}">Contact Us</a></li>
                        </ul>
                    </div>                           
                </div>
                
                <!-- CONTACT US -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="widget widget_address_outer">
                        <h5 class="widget-title">Contact Us</h5>
                        <ul class="widget_address">
                            <li>{{ $setting->address }}</li>
                            <li>{{ $setting->email }}</li>
                            <li>{{ $setting->phone }}</li>
                            {{-- <li></li> --}}
                        </ul>
                   
                    </div>                                              	
                </div>                          
                

                
            </div>
        </div> 
                     
    </div>
    <!-- FOOTER COPYRIGHT -->
    <div class="footer-bottom overlay-wraper">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="row">
                <div class="sx-footer-bot-left">
                    <span class="copyrights-text">© {{ Date("Y") }}. {{ $setting->website_title }}</span>
                </div>
            </div>
        </div>
    </div>
</footer>