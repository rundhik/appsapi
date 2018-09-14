
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap admin template">
	<meta name="author" content="">

	<title>Detail Populasi</title>

	<link rel="apple-touch-icon" href="{{url('assets/images/apple-touch-icon.png')}}">
	<link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{url('global/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('global/css/bootstrap-extend.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/site.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/examples/css/forms/validation.css')}}">

	<!-- Plugins -->
	<link rel="stylesheet" href="{{url('global/vendor/animsition/animsition.css')}}">
	<link rel="stylesheet" href="{{url('global/vendor/asscrollable/asScrollable.css')}}">
	<link rel="stylesheet" href="{{url('global/vendor/switchery/switchery.css')}}">
	<link rel="stylesheet" href="{{url('global/vendor/intro-js/introjs.css')}}">
	<link rel="stylesheet" href="{{url('global/vendor/slidepanel/slidePanel.css')}}">
	<link rel="stylesheet" href="{{url('global/vendor/flag-icon-css/flag-icon.css')}}">
			<link rel="stylesheet" href="{{url('global/vendor/formvalidation/formValidation.css')}}">
			<link rel="stylesheet" href="{{url('global/vendor/bootstrap-table/bootstrap-table.css')}}">
			<link rel="stylesheet" href="{{url('assets/examples/css/uikit/modals.css')}}">
			
		<link rel="stylesheet" href="{{url('global/vendor/select2/select2.css')}}">
        

	<!-- Fonts -->
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
          <img class="navbar-brand-logo" width="100%" src="{{url('assets/images/logokpspsetiakawan.png')}}" title="Remark">       
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
          data-toggle="collapse">
          <span class="sr-only">Toggle Search</span>
          <i class="icon wb-search" aria-hidden="true"></i>
        </button>
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
            <li class="nav-item hidden-float">
              <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                role="button">
                <span class="sr-only">Toggle Search</span>
              </a>
            </li>
          </ul>
          <!-- End Navbar Toolbar -->
    
          <!-- Navbar Toolbar Right -->
          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
            <li class="nav-item dropdown">
              <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                data-animation="scale-up" role="button">
                <span class="avatar avatar-online">
                  <img src="global/portraits/5.jpg" alt="...">
                  <i></i>
                </span>
              </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </div>
            </li>
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
    </nav>
    <div class="site-menubar">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">General</li>
              <li class="site-menu-item has-sub">
                <a href="dash-ketua.html">
                        <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                        <span class="site-menu-title">Dashboard</span>

                    </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                        <span class="site-menu-title">Kelola</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="anggota-kelompok.html">
                      <span class="site-menu-title">Anggota Kelompok</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="populasi-kelompok.html">
                      <span class="site-menu-title">Populasi Kelompok</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Page -->
    <div class="page">
      	<div class="page-header">
			<h1 class="page-title">Selamat Datang Koordinator Desa X</h1>
			<div class="page-header-actions">
			</div>
		</div>

	    <div class="page-content container-fluid">
	        <!-- Panel Constraints -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Data Anggota</h3>
          </div>
          <div class="panel-body">
            <div class="row row-lg">
              <div class="col-lg-6">
                <!-- Example Basic Constraints -->
                <div class="example-wrap m-md-0">
                  <!-- <h4 class="example-title">Data Anggota</h4> -->
                  <div class="example">
                    <form action="{{route('sapiadms.update', $sapiadm->id)}}" method="post" class="form-horizontal" >                    
                      @csrf
                    @method('put')
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">No Anggota : </label>
                        <div class="col-md-9 form-control">
                          {{$sapiadm->no_anggota}}
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nama : </label>
                        <div class="col-md-9 form-control">
                          {{$sapiadm->nama}}
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Jenis Kelamin : </label>
                        <div class="col-md-9 form-control">
                          {{$sapiadm->jenis_kelamin}}
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tempat Lahir : </label>
                        <div class="col-md-9 form-control">
                          {{$sapiadm->tempat_lhr}}
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Example Basic Constraints -->
              </div>

              <div class="col-lg-6">
                <!-- Example Basic Constraints -->
                <div class="example-wrap m-md-0">
                  <!-- <h4 class="example-title">Alamat</h4> -->
                  <div class="example">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">No Regristasi : </label>
                        <div class="col-md-9 form-control">
                          {{$sapiadm->no_regristasi}}
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Dusun : </label>
                        <div class="col-md-9 form-control">
                          {{$sapiadm->dusun}}
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Desa : </label>
                        <div class="col-md-9 form-control">
                          {{$sapiadm->desa}}
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Kelompok : </label>
                        <div class="col-md-9 form-control">
                          {{$sapiadm->kelompok}}
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Example Basic Constraints -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Constraints -->
        <!-- Panel Tabs -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Tambah Data Sapi</h3>
          </div>
	        <div class="panel-body">
	            <div class="row row-lg">
	            <div class="col-xl-12">
	                <!-- Example Tabs -->
	                <div class="example-wrap">
		                <div class="nav-tabs-horizontal" data-plugin="tabs">
		                    <ul class="nav nav-tabs" role="tablist">
		                      	<li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#SapiBetina" aria-controls="sapibetina" role="tab">Sapi Betina</a></li>
		                      	<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#SapiJantan" aria-controls="sapijantan" role="tab">Sapi Jantan</a></li>
		                    </ul>
		                    <!-- Tab Sapi Betina -->
		                    <div class="tab-content pt-20">
			                    <div class="tab-pane active" id="SapiBetina" role="tabpanel">
			                    <form autocomplete="off">
			                    	<div class="form-group row">
				                    	<div class="col-xl-2 col-md-2">
					                    <label class="col-xl-12">Jenis Kelamin</label>
						                    <div class="col-md-12">
						                      <select class="form-control" data-plugin="select2" data-placeholder="Jenis kelamin" name="jenis_kelamin" disabled>
						                        <option value="0" selected>Betina</option>
						                        <option value="1">Jantan</option>
						                      </select>
						                    </div>
					                    </div>
					                
					            		<div class="col-xl-3 col-md-3">
					                    <label class="col-xl-12">Tipe<span class="required">*</span></label>
							                    <div class="col-xl-12">
							                      <select class="form-control" data-plugin="select2" data-placeholder="Pilih tipe sapi" data-allow-clear="true" name="tipesapi" required>
							                      	<option></option>
							                        <option value="0">Lokal</option>
							                        <option value="1">Gaduan</option>
							                        <option value="2">Guliran</option>
							                        <option value="3">Lain-lain</option>
							                      </select>
							                    </div>
					                    </div>
					                
					                	<div class="col-xl-3 col-md-3">
					                    <label class="col-xl-12">Fase<span class="required">*</span></label>
					                    <div class="col-md-12">
					                      <select class="form-control" data-plugin="select2" data-placeholder="Pilih fase sapi" data-allow-clear="true" name="fase" required>
					                      <option></option>
					                      <optgroup label="Pedet">
					                        <option value="2">0-6 Bulan</option>
					                        <option value="3">6-18 Bulan</option>
					                      </optgroup>
					                      <optgroup label="Dara">
					                        <option value="4">Dara Bunting</option>
					                        <option value="5">Dara Tdk Bunting</option>
					                      </optgroup>
					                      <optgroup label="Induk">
					                        <option value="6">Laktasi Bunting</option>
					                        <option value="7">Laktasi Tdk Bunting</option>
					                        <option value="8">Kering Bunting</option>
					                        <option value="9">Kering Tdk Bunting</option>
					                      </optgroup>
					                      </select>
					                    </div>
					                    </div>
					                
					                    <div class="col-xl-2 col-md-2">
				                    	<label class="col-xl-12 col-md-12">Nomor Telinga</label>
							                <div class="col-md-12">
							                  <input type="text" class="form-control" name="eartag">
							                </div>
						                </div>
				                   
					                    <div class="col-xl-2 col-md-2">
					                    <label class="col-xl-12">Status</label>
						                    <div class="col-md-12">
						                      <select class="form-control" name="status" data-plugin="select2" data-placeholder="Status Sapi" disabled>
						                        <option value="0">Mati</option>
						                        <option value="1" selected>Hidup</option>
						                        <option value="2">Dijual</option>
						                        <option value="3">Hilang</option>
						                      </select>
						                    </div>
					                	</div>
					                </div>
				                    
				                    <div class="form-group col-xl-12 text-right padding-top-m">
					                    <button class="btn btn-danger">Batal</button><span>&nbsp;&nbsp;&nbsp;</span>
					                    <button type="submit" class="btn btn-primary" id="validateButton1">Simpan</button>
				                    </div>
			                    </form>
			                    </div>
		                    <!-- End Tab Sapi Betina -->

		                    <!-- Tab Sapi Jantan -->
			                    <div class="tab-pane" id="SapiJantan" role="tabpanel">
			                    <form autocomplete="off">
			                    	<div class="form-group row">
				                    	<div class="col-xl-2 col-md-2">
						                    <label class="col-xl-12">Jenis Kelamin</label>
						                    <div class="col-md-12">
						                      <select class="form-control" data-plugin="select2" data-placeholder="Jenis kelamin" name="jenis_kelamin" disabled>
						                        <option value="0">Betina</option>
						                        <option value="1" selected>Jantan</option>
						                      </select>
						                    </div>
					                    </div>
					                
					            		<div class="col-xl-3 col-md-3">
						                    <label class="col-xl-12">Tipe<span class="required">*</span></label>
						                    <div class="col-xl-12">
						                      <select class="form-control" data-plugin="select2" data-placeholder="Pilih tipe sapi" data-allow-clear="true" name="tipesapi" required>
						                      	<option></option>
						                        <option value="0">Lokal</option>
						                        <option value="1">Gaduan</option>
						                        <option value="2">Guliran</option>
						                        <option value="3">Lain-lain</option>
						                      </select>
						                    </div>
					                    </div>
					                
					                	<div class="col-xl-3 col-md-3">
					                    <label class="col-xl-12">Fase<span class="required">*</span></label>
					                    <div class="col-md-12">
					                      <select class="form-control" data-plugin="select2" data-placeholder="Pilih fase sapi" data-allow-clear="true" name="fase" required>
					                      <option></option>
					                      <optgroup label="Pedet">
					                        <option value="0">0-6 Bulan</option>
					                        <option value="1">6-18 Bulan</option>
					                      </optgroup>
					                        <option value="10">Muda</option>
					                        <option value="11">Dewasa</option>
					                      </select>
					                    </div>
					                    </div>
					                
					                    <div class="col-xl-2 col-md-2">
				                    	<label class="col-xl-12 col-md-12">Nomor Telinga</label>
						                <div class="col-md-12">
						                  <input type="text" class="form-control" name="eartag">
						                </div>
						                </div>
				                    
					                    <div class="col-xl-2 col-md-2">
					                    <label class="col-xl-12">Status</label>
					                    <div class="col-md-12">
					                      <select class="form-control" name="status" data-plugin="select2" data-placeholder="Status Sapi" disabled>
					                        <option value="0">Mati</option>
					                        <option value="1" selected>Hidup</option>
					                        <option value="2">Dijual</option>
					                        <option value="3">Hilang</option>
					                      </select>
					                    </div>
					                	</div>
					                </div>
				                    
				                    <div class="form-group col-xl-12 text-right padding-top-m">
					                    <button class="btn btn-danger">Batal</button><span>&nbsp;&nbsp;&nbsp;</span>
					                    <button type="submit" class="btn btn-primary" id="validateButton1">Simpan</button>
				                    </div>
			                    </form>
			                    </div>
			                <!-- End Tab Sapi Jantan -->
		                    </div>
		                </div>
	                </div>
	                <!-- End Example Tabs -->
	            </div>
	            </div>
	        </div>
        </div>
        <!-- End Panel Tabs -->

        <!-- Tabel Populasi Sapi Anggota -->
        <div class="panel">
        	<div class="panel-heading">
            <h3 class="panel-title">Total Sapi : 8 Sapi</h3>
      		</div>
      		<div class="panel-body">
      			<div class="row row-lg">
      				<div class="col-lg-6">
				  		<div class="example-wrap">
					  		<h4 class="example-title">Betina</h4>
								<table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleTablePagination" data-toggle="table" data-query-params="queryParams" data-mobile-responsive="true" data-height="300" data-pagination="true" data-icon-size="outline">
						            <thead>
						                <tr>
						                  <th>id sapi</th>
						                  <th>Jenis</th>
						                  <th>No. Telinga</th>
						                  <th>Ubah ke</th>
						                  <th>Tindakan</th>
						                </tr>
						            </thead>
						            <tbody>
						                <tr class="gradeA">
						                  <td>2356</td>
						                  <td>Pedet 0-6 bln</td>
						                  <td></td>
						                  <td><button type="button" class="btn btn-outline btn-xs btn-info">Pedet 6-18 bln</button></td>
						                  <td class="actions">
						                    <button class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row" data-target="#editSapi" data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i></button>
						                <!-- Modal -->
						                    <div class="modal fade" id="editSapi" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
						                      role="dialog" tabindex="-1">
						                      <div class="modal-dialog modal-simple modal-center modal-lg">
						                        <form class="modal-content">
						                          <div class="modal-header">
						                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						                              <span aria-hidden="true">×</span>
						                            </button>
						                            <h4 class="modal-title" id="exampleFormModalLabel">Ubah data sapi | id : 2356</h4>
						                          </div>
						                          <div class="modal-body">
										            <div class="form-group row">
				                    	<div class="col-xl-2 col-md-2">
					                    <label class="col-xl-12">Jenis Kelamin</label>
						                    <div class="col-md-12">
						                      <select class="form-control" data-plugin="select2" data-placeholder="Jenis kelamin" name="jenis_kelamin">
						                        <option value="0" selected>Betina</option>
						                        <option value="1">Jantan</option>
						                      </select>
						                    </div>
					                    </div>
					                
					            		<div class="col-xl-3 col-md-3">
					                    <label class="col-xl-12">Tipe</label>
							                    <div class="col-xl-12">
							                      <select class="form-control" data-plugin="select2" data-placeholder="Pilih tipe sapi" data-allow-clear="true" name="tipesapi">
							                      	<option></option>
							                        <option value="0" selected>Lokal</option>
							                        <option value="1">Gaduan</option>
							                        <option value="2">Guliran</option>
							                        <option value="3">Lain-lain</option>
							                      </select>
							                    </div>
					                    </div>
					                
					                	<div class="col-xl-3 col-md-3">
					                    <label class="col-xl-12">Fase</label>
					                    <div class="col-md-12">
					                      <select class="form-control" data-plugin="select2" data-placeholder="Pilih fase sapi" data-allow-clear="true" name="fase">
					                      <option></option>
					                      <optgroup label="Pedet">
					                        <option value="2" selected>0-6 Bulan</option>
					                        <option value="3">6-18 Bulan</option>
					                      </optgroup>
					                      <optgroup label="Dara">
					                        <option value="4">Dara Bunting</option>
					                        <option value="5">Dara Tdk Bunting</option>
					                      </optgroup>
					                      <optgroup label="Induk">
					                        <option value="6">Laktasi Bunting</option>
					                        <option value="7">Laktasi Tdk Bunting</option>
					                        <option value="8">Kering Bunting</option>
					                        <option value="9">Kering Tdk Bunting</option>
					                      </optgroup>
					                      </select>
					                    </div>
					                    </div>
					                
					                    <div class="col-xl-2 col-md-2">
				                    	<label class="col-xl-12 col-md-12">Nomor Telinga</label>
							                <div class="col-md-12">
							                  <input type="text" class="form-control" name="eartag">
							                </div>
						                </div>
				                   
					                    <div class="col-xl-2 col-md-2">
					                    <label class="col-xl-12">Status</label>
						                    <div class="col-md-12">
						                      <select class="form-control" name="status" data-plugin="select2" data-placeholder="Status Sapi">
						                        <option value="0">Mati</option>
						                        <option value="1" selected>Hidup</option>
						                        <option value="2">Dijual</option>
						                        <option value="3">Hilang</option>
						                      </select>
						                    </div>
					                	</div>
					                </div>
				                    
				                    <div class="form-group col-xl-12 text-right padding-top-m">
					                    <button class="btn btn-danger">Batal</button><span>&nbsp;&nbsp;&nbsp;</span>
					                    <button type="submit" class="btn btn-primary" id="validateButton1">Simpan</button>
				                    </div>
						                          </div>
						                        </form>
						                      </div>
						                    </div>
					                    <!-- End Modal -->
						                  </td>
						                </tr>
						                <tr class="gradeA">
						                  <td>6789</td>
						                  <td>Pedet 6-18 bln</td>
						                  <td></td>
						                  <td><button type="button" class="btn btn-outline btn-xs btn-info">Dara tdk bunting</button></td>
						                  <td class="actions">
						                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"><i class="icon wb-edit" aria-hidden="true"></i></a>
						                  </td>
						                </tr>
						                <tr class="gradeA">
						                  <td>4367</td>
						                  <td>Dara tdk bunting</td>
						                  <td></td>
						                  <td><button type="button" class="btn btn-outline btn-xs btn-info">Dara bunting</button></td>
						                  <td class="actions">
						                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"><i class="icon wb-edit" aria-hidden="true"></i></a>
						                  </td>
						                </tr>
						                <tr class="gradeA">
						                  <td>4027</td>
						                  <td>Dara bunting</td>
						                  <td></td>
						                  <td><button type="button" class="btn btn-outline btn-xs btn-info">Laktasi tdk bunting</button></td>
						                  <td class="actions">
						                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"><i class="icon wb-edit" aria-hidden="true"></i></a>
						                  </td>
						                </tr>
						                <tr class="gradeA">
						                  <td>8294</td>
						                  <td>Laktasi tdk bunting</td>
						                  <td></td>
						                  <td><button type="button" class="btn btn-outline btn-xs btn-info">Laktasi bunting</button></td>
						                  <td class="actions">
						                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"><i class="icon wb-edit" aria-hidden="true"></i></a>
						                  </td>
						                </tr>
						                <tr class="gradeA">
						                  <td>3028</td>
						                  <td>Laktasi bunting</td>
						                  <td></td>
						                  <td><button type="button" class="btn btn-outline btn-xs btn-info">Kering tdk bunting</button></td>
						                  <td class="actions">
						                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"><i class="icon wb-edit" aria-hidden="true"></i></a>
						                  </td>
						                </tr>
						                <tr class="gradeA">
						                  <td>16798</td>
						                  <td>Kering tdk bunting</td>
						                  <td></td>
						                  <td><button type="button" class="btn btn-outline btn-xs btn-info">Kering bunting</button></td>
						                  <td class="actions">
						                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"><i class="icon wb-edit" aria-hidden="true"></i></a>
						                  </td>
						                </tr>
						                <tr class="gradeA">
						                  <td>46932</td>
						                  <td>Kering bunting</td>
						                  <td></td>
						                  <td><button type="button" class="btn btn-outline btn-xs btn-info">Laktasi tdk bunting</button></td>
						                  <td class="actions">
						                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"><i class="icon wb-edit" aria-hidden="true"></i></a>
						                  </td>
						                </tr>
						            </tbody>
						        </table>
				        </div>
		      		</div>
	      		
		      		<div class="col-lg-6">
				  		<div class="example-wrap">
					  		<h4 class="example-title">Jantan</h4>
						  		<table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleTablePagination" data-toggle="table" data-query-params="queryParams" data-mobile-responsive="true" data-height="300" data-pagination="true" data-icon-size="outline">
						            <thead>
						                <tr>
						                  <th>id sapi</th>
						                  <th>Jenis</th>
						                  <th>No. Telinga</th>
						                  <th>Ubah ke</th>
						                  <th>Tindakan</th>
						                </tr>
						            </thead>
						            <tbody>
						                <tr class="gradeA">
						                  <td>2356</td>
						                  <td>Pedet 0-6 bln</td>
						                  <td></td>
						                  <td><button type="button" class="btn btn-outline btn-xs btn-info">Pedet 6-18 bln</button></td>
						                  <td class="actions">
						                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"><i class="icon wb-edit" aria-hidden="true"></i></a>
						                  </td>
						                </tr>
						                <tr class="gradeA">
						                  <td>6789</td>
						                  <td>Pedet 6-18 bln</td>
						                  <td></td>
						                  <td><button type="button" class="btn btn-outline btn-xs btn-info">Jantan Muda</button></td>
						                  <td class="actions">
						                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"><i class="icon wb-edit" aria-hidden="true"></i></a>
						                  </td>
						                </tr>
						                <tr class="gradeA">
						                  <td>4367</td>
						                  <td>Jantan Muda</td>
						                  <td></td>
						                  <td><button type="button" class="btn btn-outline btn-xs btn-info">Jantan Dewasa</button></td>
						                  <td class="actions">
						                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"><i class="icon wb-edit" aria-hidden="true"></i></a>
						                  </td>
						                </tr>
						            </tbody>
						        </table>
				        </div>
		      		</div>
	      		</div>
  			</div>
      	</div>
      	<!-- End Tabel Populasi Sapi Anggota -->
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
    <script src="{{url('global/vendor/matchheight/jquery.matchHeight-min.js')}}"></script>
    <script src="{{url('global/vendor/formvalidation/formValidation.min.js')}}"></script>
    <script src="{{url('global/vendor/formvalidation/framework/bootstrap4.min.js')}}"></script>
    
	<script src="{{url('global/vendor/bootstrap-table/bootstrap-table.min.js')}}"></script>
    <script src="{{url('global/vendor/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js')}}"></script>
    	<script src="{{url('global/vendor/select2/select2.js')}}"></script>
    	<script src="{{url('global/vendor/select2/select2.full.js')}}"></script>
    	<script src="{{url('global/vendor/select2/select2.full.min.js')}}"></script>
        
    
    
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

    <script src="{{url('global/js/Plugin/responsive-tabs.js')}}"></script>
    <script src="{{url('global/js/Plugin/closeable-tabs.js')}}"></script>
    <script src="{{url('global/js/Plugin/tabs.js')}}"></script>
    
    <script src="{{url('assets/examples/js/tables/bootstrap.js')}}"></script>

    	<script src="{{url('global/js/Plugin/select2.js')}}"></script>
        

    <!--
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script> -->
  </body>
</html>
