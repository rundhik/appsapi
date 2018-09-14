@extends('layout.layout')

@section('content')

<style type="text/css">
  .rg{
    background-color:blue; 
    color:#fefefe; 
    margin-top: 15px; 
    width:185px; 
    padding:10px;

  }

  .rg:hover{
    background-color: #de2;
    cursor: pointer;
    color: #000;
  }
</style>

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

 <div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Input Anggota</h3>
  </div>
  <div class="panel-body">
    <div class="row row-lg">
      <div class="col-lg-6">
        <!-- Example Basic Constraints -->
        <div class="example-wrap m-md-0">
          <!-- <h4 class="example-title">Data Anggota</h4> -->
          <div class="example">

            <form action="{{route('anggotaadms.store')}}" method="post" class="form-horizontal" >
              @csrf
              <div class="form-group row">
                <label for="no_anggota" class="col-md-3 form-control-label">No. Anggota : </label>
                <div class="col-md-9 form-control">
                 <input type="text" id="no_anggota" name="no_anggota" placeholder="**********" style="width:75%; border-style: none;"  required>                      
               </div>
             </div>
             <div class="form-group row">
              <label for="nama" class="col-md-3 form-control-label">Nama : </label>
              <div class="col-md-9 form-control">
               <input type="text" id="nama" name="nama" placeholder="Masukan nama" style="width:75%; border-style: none;"  required>
             </div>
           </div>
           <div class="form-group row">
            <label for="jenis_kelamin" class="col-md-3 form-control-label">Jenis Kelamin</label>
            <div class="col-md-6 ">
              <select class="form-control" data-allow-clear="true" id="jenis_kelamin" name="jenis_kelamin" >

                <option ></option>
                <option value="0" required>Pria</option>
                <option value="1" required>Wanita</option>
              </select>
            </div>
          </div>
    <!--                   <div class="form-group row">
                        <label for="jenis_kelamin" class="col-md-3 form-control-label">Jenis Kelamin </label>

                        <input type="text" id="jenis_kelamin" name="jenis_kelamin" placeholder="Pria / Wanita" style="width:75%;"  required>

                      </div> -->
                      <div class="form-group row">
                        <label for="tempat_lhr" class="col-md-3 form-control-label">Tempat Lahir : </label>
                        <div class="col-md-9 form-control">
                          <input type="text" id="tempat_lhr" name="tempat_lhr" placeholder="Kota Kelahiran" style="width:75%; border-style: none;"  required>                      
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="tanggal_lhr" class="col-md-3 form-control-label">Tanggal Lahir : </label>
                        <div class="col-md-9 form-control">
                          <input type="date" id="tanggal_lhr" name="tanggal_lhr" placeholder="" style="width:75%; border-style: none;"  required>                      
                        </div>
                      </div>


                    </div>
                  </div>
                  <!-- End Example Basic Constraints -->
                </div>

                <div class="col-lg-6">
                  <!-- Example Basic Constraints -->
                  <div class="example-wrap m-md-0">
                    <!-- <h4 class="example-title">Alamat</h4> -->
                    <div class="example">


                      <div class="form-group row">
                        <label for="dusun" class="col-md-3 form-control-label">Dusun : </label>
                        <div class="col-md-9 form-control">
                          <input type="text" id="dusun" name="dusun" placeholder="-------" style="width:75%; border-style: none;"  required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="desa" class="col-md-3 form-control-label">Desa : </label>
                        <div class="col-md-9 form-control">
                          <input type="text" id="desa" name="desa" placeholder="------" style="width:75%; border-style: none;"  required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="no_regristasi" class="col-md-3 form-control-label">No. Regristasi : </label>
                        <div class="col-md-9 form-control">
                          <input type="text" id="no_regristasi" name="no_regristasi" placeholder="**.**.**...." style="width:75%; border-style: none;"  required>                      
                        </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-xl-12">Wilayah</label>
                          <div class="col-md-6">
                            <select class="form-control" data-plugin="select2" data-placeholder="Pilih fase sapi" data-allow-clear="true" name="wilayah" id="wil" >
                              <option>Loading...</option>
                              @foreach ($w as $ws)
                              <option value="{{$ws->id}}" required>{{$ws->nama_wil}}</option>
                              @endforeach
                            </select>
                          </div>
                        

                      </div>
                      
                      <div class="form-group row">
                        <label class="col-xl-12">Kelompok</label>
                        <div class="col-md-6">
                          <select class="form-control" data-plugin="select2" data-placeholder="Pilih fase sapi" data-allow-clear="true" name="nama_kelompok" id="kel" >
                            <option value="">Memuat...</option>
                          </select>
                        </div>
                      </div>


                      <button type="reset" class="btn btn-danger">Reset</button>
                      <span>&nbsp;&nbsp;&nbsp;</span>
                      <button type="submit" class="btn btn-primary" >Simpan</button>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Example Basic Constraints -->
            </div>
          </div>
        </div>
      </div>				</div>

    </div>
  </div>
</div>
</div>

</div>
<!-- End Page -->

@endsection