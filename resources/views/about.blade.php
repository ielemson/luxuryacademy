@extends("layouts.app")

@section("content")
@include("includes.header")

<!-- CONTENT START -->
<div class="page-content">
@include("includes.innerbanner",["header_1"=>"About Us","header_2"=>"About Us"])
</div>

<!-- CONTENT END -->  

 <!-- ABOUT COMPANY START -->
 <div class="section-full mobile-page-padding p-t80 p-b50 bg-gray">
    <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                    
                        <div class="about-home-3 m-b30 bg-white">
                            <h3 class="m-t0 m-b20 sx-tilte">A small efficient interior design team.</h3>
                            <p>Inteshape is a team of highly talented, experienced, and architects and designers. Our company has been the leading provider of architecture services to clients through out the USA since May 1999. We pay attention to every demand...</p>

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
@endsection