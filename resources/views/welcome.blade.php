@php
    $setting = \App\Models\Setting::find(1);
@endphp

@extends('layouts.spring')
@section('content')
@include('includes.about-welcome')
@include('includes.embark') 
@include('includes.reward') 
@include('includes.about-author') 
@include('includes.faq')

<section class="content-section no-spacing" data-background="#856d47">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="footer-bar"><i class="lni lni-mastercard"></i>
            <h6>GET PREMIUM ACCESS FOR ₦@money($setting->training_cost)</h6>
           <a href="{{ route("payment") }}">
            <strong style="color: aliceblue">CLICK HERE TO REGISTER</strong>
           </a>
          </div>
          <!-- end footer-bar --> 
        </div>
        <!-- end col-12 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section> 
@endsection