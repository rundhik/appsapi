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
    <h1 class="page-title">Detail Anggota</h1>
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
    </div>
    </div>
   
@endsection 