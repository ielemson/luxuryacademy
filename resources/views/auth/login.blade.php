@extends('layouts.app')

@section('content')

<div class="page-content">
    <!-- INNER PAGE BANNER -->
    @include('includes.innerbanner',["header_1"=>"Login","header_2"=>"Login"])
    <!-- INNER PAGE BANNER END -->

    <!-- SECTION CONTENTG START -->
    <div class="section-full p-tb80 inner-page-padding">
        <!-- LOCATION BLOCK-->
        <div class="container">
            <!-- GOOGLE MAP & CONTACT FORM -->
            <div class="section-content">
                <!-- CONTACT FORM-->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input id="email" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row" style="margin-left: 10px;">
                                <div class="col-6">
                                    <div class="col-12">
                                        <a href="{{ url("/") }}" class="btn btn-primary btn-block">Go Home</a>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
