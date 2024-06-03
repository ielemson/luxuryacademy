@php
    $setting = \App\Models\Setting::find(1);
@endphp

@extends("layouts.app")

@section("content")
@include("includes.header")

<!-- CONTENT START -->
<div class="page-content">
          
            <!-- ABOUT COMPANY START -->
          @include("includes.about")
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

@include("includes.prizes") 

@include("includes.instructor")
@endsection