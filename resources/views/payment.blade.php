@php
    $setting = \App\Models\Setting::find(1);
@endphp

@extends('layouts.app')

@section('content')
    @include('includes.banner')

    <!-- CONTENT START -->
    <div class="page-content">
        <!-- INNER PAGE BANNER -->
        @include('includes.innerbanner', ['header_1' => 'Order Form', 'header_2' => 'Order Form'])
        <!-- INNER PAGE BANNER END -->

        <!-- SECTION CONTENTG START -->
        <div class="section-full p-tb80 inner-page-padding">
            <!-- LOCATION BLOCK-->
            <div class="container">
                <!-- GOOGLE MAP & CONTACT FORM -->
                <div class="section-content">
                    <!-- CONTACT FORM-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <form action="{{ route('pay') }}" class="contact-form bg-gray p-a30" method="post">
                                @csrf
                                <div class="contact-one">
                                    <!-- TITLE START -->
                                    <div class="section-head">
                                        <div class="sx-separator-outer separator-left">
                                            <div class="sx-separator bg-white bg-moving bg-repeat-x"
                                                style="background-image:url(images/background/cross-line2.png)">
                                                <h3 class="sep-line-one text-center">ENTER YOUR DETAILS BELOW TO GET ACCESS
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TITLE END -->
                                    <div class="form-group">
                                        <input name="fname" type="text" required class="form-control"
                                            placeholder="First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input name="lname" type="text" required class="form-control"
                                            placeholder="Last Name" required>
                                    </div>

                                    <div class="form-group">
                                        <input name="email" type="text" class="form-control" required
                                            placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <input name="username" type="text" class="form-control" required
                                            placeholder="Telegram Username">
                                    </div>
                                    <div class="form-group">
                                        <input name="phone" type="text" class="form-control" required
                                            placeholder="Phone Number">
                                    </div>

                                    <div class="form-group">
                                        <input name="region" type="text" class="form-control" required
                                            placeholder="State / Province">
                                    </div>
                                    <div class="form-group ">
                                        <select name="country" class="form-control" id="country">
                                            <option value="">Select Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->country_name }}">{{ $country->country_name }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input name="course" type="text" class="form-control"
                                            placeholder="{{ $setting->training_title }} -  ₦@money($setting->training_cost)" disabled>
                                    </div>

                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="currency" value="NGN">
                                    <input type="hidden" name="amount" id="amount" value="{{ $setting->training_cost }}">
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">

                                    <div class="text-center col-md-12">

                                        <button type="submit"
                                            class="site-button btn-full">
                                            <span> REGISTER FOR ₦@money($setting->training_cost)</span>
                                        </button>

                                    </div>

                                </div>
                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection