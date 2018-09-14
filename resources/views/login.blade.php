<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Dashboard</title>
    

    <link rel="apple-touch-icon" href="{{ url('assets/images/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href=" {{ url('assets/images/favicon.ico') }}">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ url('global/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('global/css/bootstrap-extend.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/site.min.css') }}">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="{{ url('global/vendor/animsition/animsition.css') }}">
    <link rel="stylesheet" href="{{ url('global/vendor/asscrollable/asScrollable.css') }}">
    <link rel="stylesheet" href="{{ url('global/vendor/switchery/switchery.css') }}">
    <link rel="stylesheet" href="{{ url('global/vendor/intro-js/introjs.css') }}">
    <link rel="stylesheet" href="{{ url('global/vendor/slidepanel/slidePanel.css') }}">
    <link rel="stylesheet" href="{{ url('global/vendor/flag-icon-css/flag-icon.css') }}">
    <link rel="stylesheet" href="{{ url('assets/examples/css/widgets/statistics.css') }}">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ url('global/fonts/web-icons/web-icons.min.css') }}">
    <link rel="stylesheet" href="{{ url('global/fonts/brand-icons/brand-icons.min.css') }}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="global/vendor/media-match/media.match.min.js"></script>
    <script src="global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="{{ url('global/vendor/breakpoints/breakpoints.js') }}"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition page-login layout-full page-dark">


<!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
      <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <div class="brand">
          <!-- <img class="brand-img" src="" alt="..."> -->
          <h2 class="brand-text">KPSP Setia Kawan Nongkojajar</h2>
        </div>
        <p>Silahkan masuk untuk mengakses halaman Anda</p>
        <form method="post" action="{{url('/user')}}">
        {{ csrf_field() }}
          <div class="form-group">
            <label class="sr-only" for="inputName">Name</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="username">
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputPassword">Password</label>
            <input type="password" class="form-control" id="password" name="password"
              placeholder="Password">
          </div>
          <!-- <div class="form-group clearfix">
            <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
              <input type="checkbox" id="inputCheckbox" name="remember">
              <label for="inputCheckbox">Remember me</label>
            </div>
            <a class="float-right" href="forgot-password.html">Forgot password?</a>
          </div> -->
          <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </form>
        <!-- <p>Still no account? Please go to <a href="register.html">Register</a></p> -->

        <footer class="page-copyright page-copyright-inverse">
          <p>KKN Universitas Narotama</p>
          <p>© 2018. All RIGHT RESERVED.</p>
          <div class="social">
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-twitter" aria-hidden="true"></i>
        </a>
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-facebook" aria-hidden="true"></i>
        </a>
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-dribbble" aria-hidden="true"></i>
        </a>
          </div>
        </footer>
      </div>
    </div>
    <!-- End Page -->
    

  
  
 <script src="{{ url('global/vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
    <script src="{{ url('global/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ url('global/vendor/popper-js/umd/popper.min.js') }}"></script>
    <script src="{{ url('global/vendor/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ url('global/vendor/animsition/animsition.js') }}"></script>
    <script src="{{ url('global/vendor/mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ url('global/vendor/asscrollbar/jquery-asScrollbar.js') }}"></script>
    <script src="{{ url('global/vendor/asscrollable/jquery-asScrollable.js') }}"></script>
    <script src="{{ url('global/vendor/ashoverscroll/jquery-asHoverScroll.js') }}"></script>
    
    <!-- Plugins -->
    <script src="{{ url('global/vendor/switchery/switchery.js') }}"></script>
    <script src="{{ url('global/vendor/intro-js/intro.js') }}"></script>
    <script src="{{ url('global/vendor/screenfull/screenfull.js') }}"></script>
    <script src="{{ url('global/vendor/slidepanel/jquery-slidePanel.js') }}"></script>
    
    <!-- Scripts -->
    <script src="{{ url('global/js/Component.js') }}"></script>
    <script src="{{ url('global/js/Plugin.js') }}"></script>
    <script src="{{ url('global/js/Base.js') }}"></script>
    <script src="{{ url('global/js/Config.js') }}"></script>
    
    <script src="{{ url('assets/js/Section/Menubar.js') }}"></script>
    <script src="{{ url('assets/js/Section/GridMenu.js') }}"></script>
    <script src="{{ url('assets/js/Section/Sidebar.js') }}"></script>
    <script src="{{ url('assets/js/Section/PageAside.js') }}"></script>
    <script src="{{ url('assets/js/Plugin/menu.js') }}"></script>
    
    <script src="{{ url('global/js/config/colors.js') }}"></script>
    <script src="{{ url('assets/js/config/tour.js') }}"></script>
    <script>Config.set('assets', '../../assets');</script>
    
    <!-- Page -->
    <script src="{{ url('assets/js/Site.js') }}"></script>
    <script src="{{ url('global/js/Plugin/asscrollable.js') }}"></script>
    <script src="{{ url('global/js/Plugin/slidepanel.js') }}"></script>
    <script src="{{ url('global/js/Plugin/switchery.js') }}"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
  </body>
</html>

