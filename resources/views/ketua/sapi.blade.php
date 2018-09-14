@extends('layout.ketua')

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
                <a href="/ketua/{{$k->id}}">
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
			<h1 class="page-title">Selamat Datang Ketua Kelompok</h1>
			<div class="page-header-actions">
			</div>
		</div>

		<div class="page-content container-fluid">
			<div class="row">
				<div class="col-xxl-4 col-lg-12">
		            <div class="panel">

						<div class="panel-heading">
						<h3 class="panel-title">Data Populasi dari Anggota Seluruh Kelompok</h3>
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
                           <a href="/ketua/{{$k->id}}/sapi/{{$sapiadm->id}}"  class="btn btn-outline btn-xs btn-info">detail</a>

                        
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

@endsection