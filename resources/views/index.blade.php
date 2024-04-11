@php
    $setting = \App\Models\Setting::find(1);
@endphp

@extends("layouts.app")

@section("content")
@include("includes.header")

<!-- CONTENT START -->
<div class="page-content">



          
            <!-- ABOUT COMPANY START -->
            <div class="section-full mobile-page-padding p-t80 p-b50 bg-gray">
                <div class="container">
						<div class="section-content">
                        	<div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                
                                	<div class="about-home-3 m-b30 bg-white">
                                    	<h3 class="m-t0 m-b20 sx-tilte">About Luxury Academy</h3>
                                        <p>Inteshape is a team of highly talented, experienced, and award-winning architects and designers. Our company has been the leading provider of architecture services to clients throughout the USA since 1999. We pay attention to every demand...</p>

									<ul class="list-angle-right anchor-line">
                                        <li><a href="#">We provide a architectural 3D modeling services.</a></li>
                                        <li><a href="#">Our specialists are ready to consult you on any topic.</a></li>
                                        <li><a href="#">We develop and implement better interior design.</a></li>
                                        <li><a href="#">We provide high-quality interior services for clients.</a></li>
                                    </ul>

                                        <div class="text-left">
                                            <a href="javascript:;" class="site-button btn-half"><span>Read More</span></a>
                                        </div>                                                    
                                    </div>
                                </div>
                                
                            	<div class="col-xl-6 col-lg-6 col-md-12">
									<div class="video-section-full-v2">
                                        <div class="video-section-full bg-no-repeat bg-cover bg-center overlay-wraper m-b30" style="background-image:url(images/video-bg.jpg)">
                                            <div class="overlay-main bg-black opacity-04"></div>
                                            <div class="video-section-inner">
                                                <div class="video-section-content">
                                                     <a href="https://player.vimeo.com/video/34741214?color=ffffff&amp;title=0&amp;byline=0&amp;portrait=0" class="mfp-video play-now">
                                                        <i class="icon fa fa-play"></i>
                                                        <span class="ripple"></span>
                                                    </a> 
                                                    <div class="video-section-bottom">
                                                    	<h3 class="sx-title text-white">25 Years<br>Experience</h3>
                                                    </div> 
                                                </div> 
                                            </div>  
                                        </div>
                                    </div>
                                </div>  
                                                              
                    		</div>
                       </div>
                 </div>
               
            </div>   
            <!-- ABOUT COMPANY END -->
    
                     
   
   <!-- OUR AWARDS SECTION START -->
   <div class="section-full p-t80 p-b50 sx-bg-secondry bg-no-repeat bg-bottom-center mobile-page-padding" style="background-image:url(images/background/bg-map.png)">
    <div class="container">
        <!-- TITLE START -->
        <div class="section-head">
            <div class="sx-separator-outer separator-center">
                <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(images/background/cross-line2.png)">
                    <h3 class="sep-line-one">Get Your Certification of Mastery</h3>
                </div>
            </div>
        </div>                   
        <!-- TITLE END -->               
       
        <div class="section-content ">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 m-b30">
                    <div class="sx-box our-story text-white">
                        <div class="mt-media our-story-info d-flex justify-content-start">
                            
                            <h4 class="text-uppercase our-story-year"></h4>
                        </div>
                        <div class="our-story-detail">
                            <h4>Upon completing the course, you will receive a personalized certificate that validates your expertise and dedication to culinary excellence.</h4>
                          
                        </div>
                    </div>
                   
                 
                 </div>
                 
                                                                                                                                           

            </div>
        </div>
    </div>
    
    
</div>   
<!-- OUR AWARDS SECTION END --> 
                   
            <!-- WHAT WE DO START -->
            <div class="section-full  mobile-page-padding bg-white  p-t80 p-b50 bg-repeat overflow-hide" style="background-image:url(images/background/bg-5.png);">
            	
				<div class="container">
                        <div class="large-title-block text-center">

                        <!-- TITLE START -->
                        <div class="section-head">
                            <div class="sx-separator-outer separator-center">
                                <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(images/background/cross-line2.png)">
                                    <h3 class="sep-line-one">Grand Prizes</h3>
                                    <h4 element-id="243">By registering for this course, you stand a chance to win extraordinary rewards that can transform your real estate career.</h4>
                                </div>
                            </div>
                        </div>                   
                        <!-- TITLE END --> 

                        </div>                
                    <div class="section-content">
                        <div class="row number-block-two-outer">
                        	<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            
                                <div class="number-block-two animate-in-to-top bdr-gray-light bdr-solid bdr-1">
                                    <div class="figcaption bg-white  p-a30">
                                        <h4 class="m-t0">A plot of land on Lagos island
                                        </h4>
                                        {{-- <p>We combine Interior and Exterior Design services and often provide them as a single solution. It helps us...</p> --}}
                                        {{-- <a href="javascript:;" class="site-button-link">Read More</a> --}}
                                        <div class="figcaption-number animate-in-to-top-content">
                                            <span>01</span>
                                        </div>                                                                                
                                    </div>
                                </div>
                                                            	
                            </div>
                            
                        	<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            
                                <div class="number-block-two animate-in-to-top bdr-gray-light bdr-solid bdr-1">
                                  
                                    <div class="figcaption bg-white p-a30">
                                        <h4 class="m-t0">Grand prize of ₦2m</h4>
                                        {{-- <p>Landscape plans for drainage problems may also entail planting beds away from the home’s foundation.</p>
                                        <a href="javascript:;" class="site-button-link">Read More</a> --}}
                                        <div class="figcaption-number text-black animate-in-to-top-content">
                                            <span>02</span>
                                        </div>                                                                                
                                    </div>
                                                                        
                                </div>
                                                            	
                            </div>
                            
                        	<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            
                                <div class="number-block-two animate-in-to-top bdr-gray-light bdr-solid bdr-1">
                                 
                                    <div class="figcaption bg-white p-a30">
                                        <h4 class="m-t0">4 people going home with ₦500k </h4>
                                        {{-- <p>We offer comprehensive Architectural Engineering Services including Interior design, Master planning...</p>
                                        <a href="javascript:;" class="site-button-link">Read More</a> --}}
                                        <div class="figcaption-number text-black animate-in-to-top-content">
                                            <span>03</span>
                                        </div>                                                                                
                                    </div>
                                                                        
                                </div>
                                                            	
                            </div>
                            
                        	<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            
                                <div class="number-block-two animate-in-to-top bdr-gray-light bdr-solid bdr-1">
                                   
                                    <div class="figcaption bg-white  p-a30">
                                        <h4 class="m-t0">5 people going home with ₦200k </h4>
                                        {{-- <p>We provide a range of architectural 3D modeling services to our customers to aid the design, planning...</p>
                                        <a href="javascript:;" class="site-button-link">Read More</a>  --}}
                                        <div class="figcaption-number text-black animate-in-to-top-content">
                                            <span>04</span>
                                        </div>                                                                               
                                    </div>
                                                                        
                                </div>
                                                            	
                            </div>
                            
                        	<div class="col-lg-6 col-md-6 col-sm-12 m-b30">
                            
                                <div class="number-block-two animate-in-to-top bdr-gray-light bdr-solid bdr-1">
                                    
                                    <div class="figcaption bg-white  p-a30">
                                        <h4 class="m-t0">2 people get to Attend a month-long house and land inspection with the CEO of Spring luxury homes</h4>
                                        {{-- <p>Project management is the process by which our team plans and executes your project. We will develop...</p>
                                        <a href="javascript:;" class="site-button-link">Read More</a> --}}
                                        <div class="figcaption-number text-black animate-in-to-top-content">
                                            <span>05</span>
                                        </div>                                        
                                    </div>
                                                                        
                                </div>
                                                            	
                            </div>
                            
                        	{{-- <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            
                                <div class="number-block-two animate-in-to-top bdr-gray-light bdr-solid bdr-1">
                                   
                                    <div class="figcaption bg-white  p-a30">
                                        <h4 class="m-t0">Style Selection</h4>
                                        <p>Our team also provides consultations on all architectural issues, even if you need specific info about working...</p>
                                        <a href="javascript:;" class="site-button-link">Read More</a> 
                                        <div class="figcaption-number text-black animate-in-to-top-content">
                                            <span>06</span>
                                        </div>                                                                                 
                                    </div>
                                  
                                                                        
                                </div>
                                                            	
                            </div>                               
                          --}}
                          <div class="large-title-block full-content bg-gray">
                        	<div class="row">
                            	<div class="col-lg-12 col-md-12 col-sm-12">
                                	<div class="large-title">
                                      <h3 class="m-tb0">
                                        Embark on a transformative Real Estate journey for just ₦@money($setting->training_cost)
                                      </h3>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12	col-sm-12">
                                	<div class="large-title-info">
                                    	{{-- <p>Vivid colors and abstract patterns, combined with unique uses of light, textures, and space, create an outdoor space that magnifies...</p> --}}
										<div class="text-left mt-2">
                                        	<a href="{{ route("payment") }}" class="site-button-link">Click Here to Register</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                                                

                    </div>
                </div>
             </div>   
            <!-- WHAT WE DO END -->
    
  
    
             
                        
</div>
<!-- CONTENT END -->  


@endsection