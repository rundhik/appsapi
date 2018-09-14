@extends('layout.layout')    

@section('content')
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
                <a href="{{route('admins.index')}}">
                        <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                        <span class="site-menu-title">Dashboard</span>
                            <div class="site-menu-badge">
                                
                            </div>
                    </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="{{route('anggotaadms.create')}}">
                        
                        <span class="site-menu-title">Tambah Anggota</span>
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
			<h1 class="page-title">Selamat Datang Admin</h1>
			<div class="page-header-actions">
			</div>
		</div>

		<div class="page-content container-fluid">
			<div class="row">
				<div class="col-xxl-4 col-lg-12">
		            <div class="panel">

						<div class="panel-heading">
						<h3 class="panel-title">Data Anggota Seluruh Desa</h3>
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
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Dusun</th>
                        <th>Desa</th>
                        <th>No. Registrasi</th>
                        <th>Wilayah</th>
                        <th>Kelompok</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                     
          <div class="panel-body">
                    <tbody>
                      @foreach ($anggotaadms as $anggotaadm)
                       <tr>
                        <td>{{$anggotaadm->no_anggota}}</td>
                        <td>{{$anggotaadm->nama}}</td>
                        <th>{{$anggotaadm->jenis_kelamin}}</th>
                        <th>{{$anggotaadm->tempat_lhr}}</th>
                        <th>{{$anggotaadm->tanggal_lhr}}</th>
                        <td>{{$anggotaadm->dusun}}</td>
                        <td>{{$anggotaadm->desa}}</td>
                        <td>{{$anggotaadm->no_regristasi}}</td>
                        <td>{{$anggotaadm->wilayah}}</td>
                        <td>{{$anggotaadm->kelompok}}</td>
                        <td>

                        <a href="{{route('anggotaadms.edit', $anggotaadm->id)}}"  class="btn btn-outline btn-xs btn-info">edit</a>
                        

                        
                        </td>
                      </tr>
@endforeach

                      <troof>
                      <tr>
                        <th>No. Anggota</th>
                        <th>Nama</th>
                        <th>L/P</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Dusun</th>
                        <th>Desa</th>
                        <th>No. Registrasi</th>
                        <th>Wilayah</th>
                        <th>Kelompok</th>
                        <th>Opsi</th>
                      </tr>
                    </troof>
                    </tbody>
                    </div>
                  </table>



            </div>
                      </div>

                </div>
        </div>
      
    </div>
    </div>
    <!-- End Page -->

@endsection