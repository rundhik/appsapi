
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta name="description" content="bootstrap admin template">
		<meta name="author" content="">

		<title>Data Populasi KPSP </title>

    <link rel="apple-touch-icon" href="{{ url('assets/images/apple-touch-icon.png') }}"> 
    <link rel="shortcut icon" href=" {{ url('assets/images/favicon.ico') }}">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ url('global/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('global/css/bootstrap-extend.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/site.min.css') }}">
    
		<!-- Plugins -->
		<link rel="stylesheet" href="{{url('global/vendor/animsition/animsition.css')}}"> 
		<link rel="stylesheet" href="{{url('global/vendor/asscrollable/asScrollable.css')}}">
		<link rel="stylesheet" href="{{url('global/vendor/switchery/switchery.css')}}">
		<link rel="stylesheet" href="{{url('global/vendor/intro-js/introjs.css')}}">
		<link rel="stylesheet" href="{{url('global/vendor/slidepanel/slidePanel.css')}}">
		<link rel="stylesheet" href="{{url('global/vendor/flag-icon-css/flag-icon.css')}}">
		    <link rel="stylesheet" href="{{url('global/vendor/datatables.net-bs4/dataTables.bootstrap4.css')}}">
		    <link rel="stylesheet" href="{{url('global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css')}}">
		    <link rel="stylesheet" href="{{url('global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css')}}">
		    <link rel="stylesheet" href="{{url('global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css')}}">
		    <link rel="stylesheet" href="{{url('global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css')}}">
		    <link rel="stylesheet" href="{{url('global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css')}}">
		    <link rel="stylesheet" href="{{url('global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css')}}">
		    <link rel="stylesheet" href="{{url('global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css')}}">
		    <link rel="stylesheet" href="{{url('assets/examples/css/tables/datatable.css')}}">


		<!-- Fonts -->
		    <link rel="stylesheet" href="{{url('global/fonts/font-awesome/font-awesome.css')}}">
		<link rel="stylesheet" href="{{url('global/fonts/web-icons/web-icons.min.css')}}">
		<link rel="stylesheet" href="{{url('global/fonts/brand-icons/brand-icons.min.css')}}">
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

		<!--[if lt IE 9]>
		<script src="global/vendor/html5shiv/html5shiv.min.js"></script>
		<![endif]-->

		<!--[if lt IE 10]>
		<script src="global/vendor/media-match/media.match.min.js"></script>
		<script src="global/vendor/respond/respond.min.js"></script>
		<![endif]-->

		<!-- Scripts -->
		<script src="{{url('global/vendor/breakpoints/breakpoints.js')}}"></script>
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
    
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
          <form role="search">
            <div class="form-group">
              <div class="input-search">
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                  data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
    </nav>    <div class="site-menubar">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">General</li>
              <li class="site-menu-item has-sub">
                <a href="">
                        <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                        <span class="site-menu-title">Dashboard</span>
                            <div class="site-menu-badge">
                                
                            </div>
                    </a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    
      </div>


    <!-- Page -->

    <div class="page">
		<div class="page-header">
			<h1 class="page-title">Selamat Datang Koordinator</h1>
			<div class="page-header-actions">
			</div>
		</div>

		<div class="page-content container-fluid">
			<div class="row">
				<div class="col-xxl-4 col-lg-12">
		            <div class="panel">

						<div class="panel-heading">
						<h3 class="panel-title">Data Populasi dari Anggota Seluruh Desa</h3>
						</div>
						<!-- <header class="panel-heading">
							<div class="panel-actions"></div>
							<h3 class="panel-title">Basic</h3>
						</header> -->

						<div class="panel-body">

           

           <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
           
                    <thead>

                      <tr>
                        <th>No. Anggota</th>
                        <th>Nama</th>
                        <th>L/P</th>
                        <th>Dusun</th>
                        <th>Desa</th>
                        <th>No. Registrasi</th>
                        <th>Jumlah Populasi</th>
                        <th>Wilayah</th>
                        <th>Kelompok</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No. Anggota</th>
                        <th>Nama</th>
                        <th>L/P</th>
                        <th>Dusun</th>
                        <th>Desa</th>
                        <th>No. Registrasi</th>
                        <th>Jumlah Populasi</th>
                        <th>Wilayah</th>
                        <th>Kelompok</th>
                        <th>Opsi</th>
                      </tr>
                    </tfoot>
             <tbody>
                      @foreach ($sapiadms as $sapiadm)
                       <tr>
                        <td>{{$sapiadm->no_anggota}}</td>
                        <td>{{$sapiadm->nama}}</td>
                        <th>{{$sapiadm->jenis_kelamin}}</th>
                        <td>{{$sapiadm->dusun}}</td>
                        <td>{{$sapiadm->desa}}</td>
                        <td>{{$sapiadm->no_regristasi}}</td>
                        <td>{{$sapiadm->jumlah}}</td>
                        <td>{{$sapiadm->wilayah}}</td>
                        <td>{{$sapiadm->kelompok}}</td>                        
                        <td>
                           <a href="{{route('sapikoord.show', $sapiadm->id)}}"  class="btn btn-outline btn-xs btn-info">detail</a>

                        
                        </td>
                      </tr>
                      @endforeach
                </tbody>
                   
                  </table>

           
					

            </div>
                      </div>

                </div>
        </div>
      
    </div>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Tim KKN</a></div>
      <div class="site-footer-right">
        Project by <i class="red-600 wb wb-heart"></i> by <a href="https://themeforest.net/user/creation-studio">Fakultas Ilmu Komputer Narotama</a>
      </div>
    </footer>
    <!-- Core  -->
    <script src="{{url('global/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
    <script src="{{url('global/vendor/jquery/jquery.js')}}"></script>
    <script src="{{url('global/vendor/popper-js/umd/popper.min.js')}}"></script>
    <script src="{{url('global/vendor/bootstrap/bootstrap.js')}}"></script>
    <script src="{{url('global/vendor/animsition/animsition.js')}}"></script>
    <script src="{{url('global/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{url('global/vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
    <script src="{{url('global/vendor/asscrollable/jquery-asScrollable.js')}}"></script>
    <script src="{{url('global/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>
    
    <!-- Plugins -->
    <script src="{{url('global/vendor/switchery/switchery.js')}}"></script>
    <script src="{{url('global/vendor/intro-js/intro.js')}}"></script>
    <script src="{{url('global/vendor/screenfull/screenfull.js')}}"></script>
    <script src="{{url('global/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
        <script src="{{url('global/vendor/datatables.net/jquery.dataTables.js')}}"></script>
        <script src="{{url('global/vendor/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
        <script src="{{url('global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js')}}"></script>
        <script src="{{url('global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js')}}"></script>
        <script src="{{url('global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js')}}"></script>
        <script src="{{url('global/vendor/datatables.net-scroller/dataTables.scroller.js')}}"></script>
        <script src="{{url('global/vendor/datatables.net-responsive/dataTables.responsive.js')}}"></script>
        <script src="{{url('global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js')}}"></script>
        <script src="{{url('global/vendor/datatables.net-buttons/dataTables.buttons.js')}}"></script>
        <script src="{{url('global/vendor/datatables.net-buttons/buttons.html5.js')}}"></script>
        <script src="{{url('global/vendor/datatables.net-buttons/buttons.flash.js')}}"></script>
        <script src="{{url('global/vendor/datatables.net-buttons/buttons.print.js')}}"></script>
        <script src="{{url('global/vendor/datatables.net-buttons/buttons.colVis.js')}}"></script>
        <script src="{{url('global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js')}}"></script>
        <script src="{{url('global/vendor/asrange/jquery-asRange.min.js')}}"></script>
        <script src="{{url('global/vendor/bootbox/bootbox.js')}}"></script>
    
    <!-- Scripts -->
    <script src="{{url('global/js/Component.js')}}"></script>
    <script src="{{url('global/js/Plugin.js')}}"></script>
    <script src="{{url('global/js/Base.js')}}"></script>
    <script src="{{url('global/js/Config.js')}}"></script>
    
    <script src="{{url('assets/js/Section/Menubar.js')}}"></script>
    <script src="{{url('assets/js/Section/GridMenu.js')}}"></script>
    <script src="{{url('assets/js/Section/Sidebar.js')}}"></script>
    <script src="{{url('assets/js/Section/PageAside.js')}}"></script>
    <script src="{{url('assets/js/Plugin/menu.js')}}"></script>
    
    <script src="{{url('global/js/config/colors.js')}}"></script>
    <script src="{{url('assets/js/config/tour.js')}}"></script>
    <script>Config.set('assets', '../../assets');</script>
    
    <!-- Page -->
    <script src="{{url('assets/js/Site.js')}}"></script>
    <script src="{{url('global/js/Plugin/asscrollable.js')}}"></script>
    <script src="{{url('global/js/Plugin/slidepanel.js')}}"></script>
    <script src="{{url('global/js/Plugin/switchery.js')}}"></script>
        <script src="{{url('global/js/Plugin/datatables.js')}}"></script>
    
        <script src="{{url('assets/examples/js/tables/datatable.js')}}"></script>
  </body>
</html>
