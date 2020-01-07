<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <title>DYNASUN</title>
        <!-- styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
        <!-- custom css file -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/easing.min.js') }}"></script>
        <script src="{{ asset('js/hoverIntent.js') }}"></script>
        <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
        <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/sticky.js') }}"></script>
        <script src="{{ asset('js/superfish.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/welcome.js') }}"></script>
    </head>
    <body class="login">
        
        <div class="content">
            <form class="login-form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <h3 class="form-title">Sign In</h3>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control" name="email" placeholder="E mail address" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn login-button">
                            Login
                        </button>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <button type="submit" class="btn login-facebook-button">
                            facebook
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn login-twitter-button">
                            twitter
                        </button>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label class="form-control">Your data is kept confidential and will not be shared on a schedule.</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label class="form-control">Don't you have account yet? Click <a href="{{ url('/register') }}">here</a> to regist now.</label>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
