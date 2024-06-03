@php
    $setting = \App\Models\Setting::find(1);
@endphp
<section class="content-section">
    <div class="container">
      <div class="row no-gutters align-items-center">
        <div class="col-12">
          <div class="section-title text-center">
            <h6>{{ $setting->website_title }}</h6>
            <h2>Transform Your Career in Real Estate</h2>
          </div>
          <!-- end section-title --> 
        </div>
        <!-- end col-12 -->
        <div class="col-lg-6">
          <figure class="side-image left-align reveal-effect"><img src="{{ asset("media/images/4.jpg") }}" alt="Image"></figure>
        </div>
        <!-- end col-6 -->
        <div class="col-lg-6">
          <div class="side-hotel-box right">

            <div class="info-box"> 
              <span>
                Master Property Valuation and Pricing: Learn strategies to make your real estate investments profitable.
              </span>
             </div>
            <div class="info-box"> 
              <span>
                Unlock Real Estate Strategies: Explore a vast array of techniques and insights to elevate your real estate expertise.
              </span>
             </div>
            <div class="info-box"> 
              <span>
                Strategic Investment Insights: Gain expertise in analyzing real estate market trends and identifying lucrative investment opportunities.
              </span>
             </div>
            
            <!-- end info-box --> 
            
          </div>
          <!-- end side-content --> 
        </div>
        <!-- end col-6 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>