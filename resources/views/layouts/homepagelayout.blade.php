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
    <!-- <link href="{{ asset('css/login.css') }}" rel="stylesheet"> -->
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
<body id="body">
    <!-- <div id="app"> -->
    <header id="header">
      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><img class="logo_img" src="{{ asset('img/logo_custom.png') }}"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          @if (Route::has('login'))
            @if (Auth::check())
                <li><a href="{{ url('/home') }}">Main Page</a></li>
                <li class="menu-has-children"><a href="#"><img class="flag" src="{{ asset('img/flag logo/en.png') }}"></a>
                <ul>
                  <li><a href="#"><img class="flag" src="{{ asset('img/flag logo/fr.png') }}"></a></li>
                  <li><a href="#"><img class="flag" src="{{ asset('img/flag logo/it.png') }}"></a></li>
                  <li><a href="#"><img class="flag" src="{{ asset('img/flag logo/de.png') }}"></a></li>
                  <li><a href="#"><img class="flag" src="{{ asset('img/flag logo/es.png') }}"></a></li>
                </ul>
              </li>
            @else
              <li><a href="{{ url('/login') }}">login</a></li>
              <li><a href="{{ url('/register') }}">register</a></li>
              <li class="menu-has-children"><a href="#"><img class="flag" src="{{ asset('img/flag logo/en.png') }}"></a>
                <ul>
                  <li><a href="#"><img class="flag" src="{{ asset('img/flag logo/fr.png') }}"></a></li>
                  <li><a href="#"><img class="flag" src="{{ asset('img/flag logo/it.png') }}"></a></li>
                  <li><a href="#"><img class="flag" src="{{ asset('img/flag logo/de.png') }}"></a></li>
                  <li><a href="#"><img class="flag" src="{{ asset('img/flag logo/es.png') }}"></a></li>
                </ul>
              </li>
              @endif
          @endif
        </ul>
      </nav><!-- #nav-menu-container -->
    </header>

    @yield('content')
    
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>William</strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
      </div>
    </footer>
    <!-- #footer -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</body>
</html>
