@php
$setting = \App\Models\Setting::find(1);
@endphp
  <!-- end content-section -->
  <section class="content-section no-spacing" data-background="#f5f3ec">
    <div class="container">
      <div class="row no-gutters align-items-center">
        <div class="col-lg-6">
          <div class="side-content text-center">
            <h6>Welcome to {{ $setting->website_title }}</h6>
            <h2 class="line">
              Explore Premier Real Estate Opportunities
            </h2>
            <a href="{{ route("payment") }}" class="custom-button">GET ACCESS FOR ₦@money($setting->training_cost)</a> </div>
          <!-- end side-content --> 
        </div>
        <!-- end col-6 -->
        <div class="col-lg-6">
          <figure class="side-image right-full overlap-bottom reveal-effect"><img src="{{ asset("media/images/5.jpg") }}" alt="about" > 
            <a href="{{ asset("media/video/intro.mp4") }}" class="video-button" data-fancybox data-width="640" data-height="360" ><i class="lni lni-play"></i></a>
         </figure>
        </div>
        <!-- end col-6 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end content-section -->