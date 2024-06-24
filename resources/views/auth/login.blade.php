
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/icheck-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.css') }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">

        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Spring</b> Luxury</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Academy</p>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                <div class="form-login">
                    <div class="form-group">
                        <input id="email" type="email" placeholder="E-mail" class="form-control account @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                       
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />
                        <span class="view-password"></span>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                 
                    <div class="btn-group form-group text-center" role="group" aria-label="buttons">
                    {{-- <button type="button" class="btn btn-primary">Left</button> --}}
                    <button type="submit" class="btn btn-success">Login</button>
                
                    <a href="{{ url("/") }}"  class="btn btn-warning btn-block">Go Back Home</a>
                  </div>
                   
                </div>
                </form>
              
            </div>

        </div>

    </div>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
</body>

</html>
