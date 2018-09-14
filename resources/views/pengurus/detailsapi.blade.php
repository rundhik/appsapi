@extends('layout.pengurus')

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
</nav>
<div class="site-menubar">
  <div class="site-menubar-body">
    <div>
      <div>
        <ul class="site-menu" data-plugin="menu">
          <li class="site-menu-category">General</li>
          <li class="site-menu-item has-sub">
            <a href="{{route('pengurus.index')}}">
              <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
              <span class="site-menu-title">Dashboard</span>

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
    <h1 class="page-title">Detail Sapi</h1>
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
                <form class="form-horizontal" >
                  @foreach($anggota as $anggotas)
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">No Anggota : </label>
                    <div class="col-md-9 form-control">
                      {{$anggotas->no_anggota}}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Nama : </label>
                    <div class="col-md-9 form-control">
                      {{$anggotas->nama}}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Jenis Kelamin : </label>
                    <div class="col-md-9 form-control">
                      {{$anggotas->jenis_kelamin}}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Tempat Lahir : </label>
                    <div class="col-md-9 form-control">
                      {{$anggotas->tempat_lhr}}
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
                      {{$anggotas->no_regristasi}}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Dusun : </label>
                    <div class="col-md-9 form-control">
                      {{$anggotas->dusun}}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Desa : </label>
                    <div class="col-md-9 form-control">
                      {{$anggotas->desa}}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Kelompok : </label>
                    <div class="col-md-9 form-control">
                      {{$anggotas->kelompok}}
                    </div>
                  </div>
                  @endforeach
                </form>
              </div>
            </div>
            <!-- End Example Basic Constraints -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Panel Constraints -->
   

    <!-- Tabel Populasi Sapi Anggota -->
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Total Sapi : {{$c}} Sapi</h3>
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
                    <th>Tipe</th>
                    <th>No. Telinga</th>
                    <th>Fase</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach($b as $betina) 
                  <tr class="sapi{{$betina->id}}">
                    <td>{{$betina->id}}</td>
                    <td>{{$betina->tipe_sapi}}</td>
                    <td>{{$betina->eartag}}</td>
                    <td><button type="button" class="btn btn-outline btn-xs btn-info">{{$betina->fase}}</button></td>
                    
                </tr>
                @endforeach
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
                  <th>Tipe</th>
                  <th>No. Telinga</th>
                  <th>Fase</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($j as $jantan) 
                <tr class="sapi{{$jantan->id}}">
                  <td>{{$jantan->id}}</td>
                  <td>{{$jantan->tipe_sapi}}</td>
                  <td>{{$jantan->eartag}}</td>
                  <td><button type="button" class="btn btn-outline btn-xs btn-info">{{$jantan->fase}}</button></td>
                  
                </tr>
                @endforeach
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


@endsection 