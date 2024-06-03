@php
    $setting = \App\Models\Setting::find(1);
@endphp

@extends('layouts.app')

@section('content')
    @include('includes.banner')

    <!-- CONTENT START -->
    <div class="page-content">
        <!-- INNER PAGE BANNER -->
        @include('includes.innerbanner', ['header_1' => 'Get Access', 'header_2' => 'Get Access'])
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
                            <form action="#" id="getAccessForm" class=" getAccessForm contact-form bg-gray p-a30"
                                method="post">
                                @csrf
                                <div class="contact-one">
                                    <!-- TITLE START -->
                                    <div class="section-head">
                                        <div class="sx-separator-outer separator-left">
                                            <div class="sx-separator bg-white bg-moving bg-repeat-x"
                                                style="background-image:url({{ asset("images/background/cross-line2.png") }})">
                                                <h3 class="sep-line-one text-center">ENTER YOUR DETAILS BELOW TO GET ACCESS
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TITLE END -->
                                    <div class="form-group">
                                        <input name="fname" id="fname" type="text" required class="form-control"
                                            placeholder="First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input name="lname" id="lname" type="text" required class="form-control"
                                            placeholder="Last Name" required>
                                    </div>

                                    <div class="form-group">
                                        <input name="email" id="email" type="email" class="form-control" required
                                            placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <input name="username" id="username" type="text" class="form-control" required
                                            placeholder="Telegram Username">
                                    </div>
                                    <div class="form-group">
                                        <input name="phone" id="phone" type="text" class="form-control" required
                                            placeholder="Phone Number">
                                    </div>

                                    <div class="form-group">
                                        <input name="state" id="state" type="text" class="form-control" required
                                            placeholder="State / Province">
                                    </div>
                                    <div class="form-group ">
                                        <select name="country" id="country" class="form-control" id="country" required>
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

                                    {{-- <input type="hidden" name="quantity" value="1"> --}}
                                    <input type="hidden" name="reference" id="reference">
                                    <input type="hidden" name="status" id="status">
                                    <input type="hidden" name="message" id="message">
                                    <input type="hidden" name="amount" id="amount"
                                        value="{{ $setting->training_cost }}">
                                    {{-- <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> --}}

                                    <div class="text-center col-md-12">

                                        <button type="submit" class="site-button btn-full">
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
@push("custom_script")
<script>
        
$(document).ready(function(){

    const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
$('#getAccessForm').parsley();

$('#getAccessForm').on('submit', function(event){
 event.preventDefault();

 if($('#getAccessForm').parsley().isValid())
 {
    let handler = PaystackPop.setup({
                    key: 'pk_test_da101d4e2eab769a31a40ab72904c71c405d8dc2', // Replace with your public keyS
                    email: document.getElementById("email").value,
                    amount: document.getElementById("amount").value * 100,
                    onClose: function() {
                        Toast.fire({
                            // type: 'success',
                            icon: 'error',
                            title: "Payment Cancelled"
                        })
                    },
                    callback: function(response) {
                        //   let message = 'Payment complete! Reference: ' + response.reference;
                        //   alert(message);
                        $("#reference").val(response.reference);
                        $("#status").val(response.status);
                        $("#message").val(response.message);
                        // var formData = new FormData(this);
                        // var all = $(this).serialize();
                      
                     $.ajax({
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url:"{{ route('paymentAccess') }}",
                            method:"POST",  
                            data:$("#getAccessForm").serialize(),
                            dataType: "json",
                            success: function(data) {
                                    if (data.status == 200) {
                            Toast.fire({
                            // type: 'success',
                            icon: 'success',
                            title: data.msg
                             });
                             $('#getAccessForm')[0].reset();
                            }
                            },
                            error: function(data) {
                          Toast.fire({
                            // type: 'success',
                            icon: 'error',
                            title: data.msg
                             });
                             $('#getAccessForm')[0].reset();

                            }
                        });

                    }
                });

                handler.openIframe();
 }
});

});
      </script>
  @endpush

    @push("style")
    <style>
        .box
        {
         width:100%;
         max-width:600px;
         background-color:#f9f9f9;
         border:1px solid #ccc;
         border-radius:5px;
         padding:16px;
         margin:0 auto;
        }
        input.parsley-success,
        select.parsley-success,
        textarea.parsley-success {
          color: #468847;
          background-color: #DFF0D8;
          border: 1px solid #D6E9C6;
        }
      
        input.parsley-error,
        select.parsley-error,
        textarea.parsley-error {
          color: #B94A48;
          background-color: #F2DEDE;
          border: 1px solid #EED3D7;
        }
      
        .parsley-errors-list {
          margin: 2px 0 3px;
          padding: 0;
          list-style-type: none;
          font-size: 0.9em;
          line-height: 0.9em;
          opacity: 0;
      
          transition: all .3s ease-in;
          -o-transition: all .3s ease-in;
          -moz-transition: all .3s ease-in;
          -webkit-transition: all .3s ease-in;
        }
      
        .parsley-errors-list.filled {
          opacity: 1;
        }
        
        .parsley-type, .parsley-required, .parsley-equalto, .parsley-pattern, .parsley-length{
         color:#ff0000;
        }
        
        </style>
    @endpush
@endsection
