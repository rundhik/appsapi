
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Dashboard Admin</title>
    
    <link rel="apple-touch-icon" href="{{ url('assets/images/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href=" {{ url('assets/images/favicon.ico') }}">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ url('global/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('global/css/bootstrap-extend.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/site.min.css') }}">
    <link rel="stylesheet" href="assets/examples/css/forms/validation.css">
    <!-- Plugins -->
    <link rel="stylesheet" href="{{ url('global/vendor/animsition/animsition.css') }}">
    <link rel="stylesheet" href="{{ url('global/vendor/asscrollable/asScrollable.css') }}">
    <link rel="stylesheet" href="{{ url('global/vendor/switchery/switchery.css') }}">
    <link rel="stylesheet" href="{{ url('global/vendor/intro-js/introjs.css') }}">
    <link rel="stylesheet" href="{{ url('global/vendor/slidepanel/slidePanel.css') }}">
    <link rel="stylesheet" href="{{ url('global/vendor/flag-icon-css/flag-icon.css') }}">
        <link rel="stylesheet" href="{{ url('assets/examples/css/widgets/statistics.css') }}">
        <link rel="stylesheet" href="global/vendor/bootstrap-table/bootstrap-table.css">
      <link rel="stylesheet" href="assets/examples/css/uikit/modals.css">
      
    <link rel="stylesheet" href="global/vendor/select2/select2.css">
    
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
  <body class="animsition">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    
      <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
          data-toggle="menubar">
          <span class="sr-only">Toggle navigation</span>
          <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
          <img class="navbar-brand-logo" width="100%;" src="{{url('assets/images/logokpspsetiakawan.png')}}" title="Remark">
        </div>
        
      </div>
    
      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
            <li class="nav-item hidden-float" id="toggleMenubar">
              <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
            </li>
            <li class="nav-item hidden-sm-down" id="toggleFullscreen">
              <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                <span class="sr-only">Toggle fullscreen</span>
              </a>
            </li>
        
          </ul>
          <!-- End Navbar Toolbar -->
    
          <!-- Navbar Toolbar Right -->
          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
            
              <a class="nav-link navbar-avatar" href="/keluar" 
                data-animation="scale-up" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i>
                Logout
              </a>
              
            
          </ul>
          <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->

        @yield('content')

        <footer class="site-footer">
      <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Tim KKN</a></div>
      <div class="site-footer-right">
        Project by <i class="red-600 wb wb-heart"></i> by <a href="https://themeforest.net/user/creation-studio">Fakultas Ilmu Komputer Narotama</a>
      </div>
    </footer>    
    
    

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


    <script type="text/javascript">
        $("#wil").change(function() {

            $.getJSON("/getkelompok/" + $("#wil option:selected").val(), function(data) {
                //console.log(data);
                var temp = [];
                //CONVERT INTO ARRAY
                $.each(data, function(key, value) {
                    temp.push({v:value, k: key});
                });
                //SORT THE ARRAY
                temp.sort(function(a,b){
                   if(a.v > b.v){ return 1}
                    if(a.v < b.v){ return -1}
                      return 0;
                });
                //APPEND INTO SELECT BOX
                $('#kel').empty();
                $.each(temp, function(key, obj) {
                    $('#kel').append('<option value="' + obj.k +'">' + obj.v + '</option>');           
                });            
            });
            
        }); 
    </script>
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

