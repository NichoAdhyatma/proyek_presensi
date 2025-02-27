<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    @extends('layouts.app')

    @section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url(assets/img/ab.jpg);"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="row justify-content-center">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <h3>{{ __('Login') }}</h3>
                                    </div>
                                </div>

                                <form method="POST" action="{{ route('login') }}" class="signin-form">
                                    @csrf

                                    <div class="form-group mt-3">
                                        <label for="email"class="cform-control-placeholder">{{ __('Email Address') }}</label>


                                        <input id="email" type="email"class="form-control @error('email') is-invalid @enderror" name="email"value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="password"class="orm-control-placeholder">{{ __('Password') }}</label>


                                        <input id="password" type="password"class="form-control @error('password') is-invalid @enderror" name="password"required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <div class="form-group d-md-flex">
                                        <div class="w-50 text-left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="w-50 text-left">
                                            <button type="submit"class="form-control btn btn-primary rounded submit px-3">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection

</body>

</html>