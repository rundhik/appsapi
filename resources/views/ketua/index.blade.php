@extends('layout.ketua')

@section('content')
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
            <a href="/ketua/{{$k->id}}">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
                <div class="site-menu-badge">
                    <span class="badge badge-pill badge-success"></span>
                </div>
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
                <a class="animsition-link" href="/ketua/{{$k->id}}/anggota">
                  <span class="site-menu-title">Anggota</span>
              </a>
          </li>
          <li class="site-menu-item">
            <a class="animsition-link" href="/ketua/{{$k->id}}/sapi">
              <span class="site-menu-title">Populasi Sapi</span>
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
        <h1 class="page-title">Selamat Datang {{$k->username}} Ketua Kelompok dari  @foreach ($wil as $w) {{$w->nama_kelompok}} @endforeach</h1>
        <div class="page-header-actions">
        </div>
    </div>

    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-xxl-4 col-lg-12">
                <div class="panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">Data Populasi All</h3>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-block p-20 bg-green-600">
                <div class="counter counter-lg counter-inverse">
                    <div class="counter-label text-uppercase font-size-16">Total</div>
                    <div class="counter-number-group">
                        <span class="counter-number">{{$jumlah}}</span>
                        <!-- <span class="counter-icon ml-10"><i class="icon wb-image" aria-hidden="true"></i></span> -->
                    </div>
                    <div class="counter-label text-uppercase font-size-16">Populasi Sapi</div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card card-block p-20 bg-blue-600">
                <div class="counter counter-lg counter-inverse">
                    <div class="counter-label text-uppercase font-size-16">Sapi Betina</div>
                    <div class="counter-number-group">
                        <span class="counter-number">{{$betina}}</span>
                        <!-- <span class="counter-icon ml-10"><i class="icon wb-image" aria-hidden="true"></i></span> -->
                    </div>
                    <div class="counter-label text-uppercase font-size-16">Populasi</div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card card-block">
                <div class="counter counter-lg">
                    <div class="counter-label text-uppercase font-size-16">Sapi Jantan</div>
                    <div class="counter-number-group">
                        <span class="counter-number">{{$jantan}}</span>
                        <!-- <span class="counter-number-related">+</span> -->
                    </div>
                    <div class="counter-label text-uppercase font-size-16">Populasi</div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card card-block">
                <div class="counter counter-lg">
                    <div class="counter-label text-uppercase font-size-16">Total Anggota</div>
                    <div class="counter-number-group">
                        <span class="counter-number">{{$total}}<i class="icon icon-circle wb-users"></i></span>
                        <!-- <span class="counter-number-related"></span> -->
                    </div>
                    <!-- <div class="counter-label text-uppercase font-size-16">Anggota</div> -->
                </div>
            </div>
        </div>

        <div class="col-md-6">
        <a style="text-decoration: none;" href="/ketua/{{$k->id}}/anggota">
                <div class="card card-block p-30 bg-red-600">
                    <div class="card-watermark darker font-size-80 m-15"><i class="icon wb-users" aria-hidden="true"></i></div>
                    <div class="counter counter-md counter-inverse text-left">
                        <div class="counter-number-group">
                            <!-- <span class="counter-number">98</span> -->

                            <span class="counter-number-related text-capitalize">Data Anggota</span>
                        </div>
                        <div class="counter-label text-capitalize">Melihat data anggota All</div>
                    </div>

                </div>
            </a>
        </div>

        <div class="col-md-6">
            <a style="text-decoration: none;" href="/ketua/{{$k->id}}/sapi">
                <div class="card card-block p-30 bg-blue-600">
                    <div class="card-watermark darker font-size-80 m-15"><i class="icon wb-clipboard" aria-hidden="true"></i></div>
                    <div class="counter counter-md counter-inverse text-left">
                        <div class="counter-number-group">
                            <!-- <span class="counter-number">25</span> -->

                            <span class="counter-number-related text-capitalize">Data Populasi Sapi</span>
                        </div>
                        <div class="counter-label text-capitalize">Mengelola data populasi All</div>
                    </div>

                </div>
            </a>
        </div>               
    </div>
</div>
</div>
<!-- End Page -->

@endsection