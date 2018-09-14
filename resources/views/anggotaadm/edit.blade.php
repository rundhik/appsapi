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
              
                    <form action="{{route('anggotaadms.update', $anggotaadm->id)}}" method="post" class="form-horizontal" >
                    @csrf
                    @method('put')
                      <div class="form-group row">
                        <label for="no_anggota" class="col-md-3 form-control-label">No. Anggota : </label>
                         <input type="text" id="no_anggota" name="no_anggota" style="width:75%;" value="{{$anggotaadm->no_anggota}}" required>                      
                      </div>
                      <div class="form-group row">
                        <label for="nama" class="col-md-3 form-control-label">Nama : </label>
                        
                         <input type="text" id="nama" name="nama" style="width:75%;" value="{{$anggotaadm->nama}}" required> 
                        
                      </div>
                      <div class="form-group row">
                        <label for="jenis_kelamin" class="col-md-3 form-control-label">Jenis Kelamin </label>

                        <input type="text" id="jenis_kelamin" name="jenis_kelamin" style="width:75%;" value="{{$anggotaadm->jenis_kelamin}}" required>

                      </div>
                      <div class="form-group row">
                        <label for="tempat_lhr" class="col-md-3 form-control-label">Tempat Lahir : </label>
                        <input type="text" id="tempat_lhr" name="tempat_lhr" style="width:75%;" value="{{$anggotaadm->tempat_lhr}}" required>
                        </div>

                         <div class="form-group row">
                        <label for="tanggal_lhr" class="col-md-3 form-control-label">Tanggal Lahir : </label>
                        <input type="date" id="tanggal_lhr" name="tanggal_lhr" placeholder="" style="width:75%;" value="{{$anggotaadm->tanggal_lhr}}" required>              
                        </div>
                      
                      <div class="form-group row">
                        <label for="dusun" class="col-md-3 form-control-label">Dusun : </label>
                        <input type="text" id="dusun" name="dusun" style="width:75%;" value="{{$anggotaadm->dusun}}" required>
                      </div>
                      <div class="form-group row">
                        <label for="desa" class="col-md-3 form-control-label">Desa : </label>
                        <input type="text" id="desa" name="desa" style="width:75%;" value="{{$anggotaadm->desa}}" required>
                      </div>
                      <div class="form-group row">
                        <label for="no_regristasi" class="col-md-3 form-control-label">No. Regristasi : </label>
                        <input type="text" id="no_regristasi" name="no_regristasi" style="width:75%;" value="{{$anggotaadm->no_regristasi}}" required>
                      </div>
                      <div class="form-group row">
                              <label for="wilayah" class="col-md-3 form-control-label">Wilayah : </label>
                                  
                                    <select  data-plugin="select2" data-placeholder="Wilayah" data-allow-clear="true" name="wilayah" id="wilayah" >
                                      <option value="{{$anggotaadm->wilayah}}"></option>
                                      <option value="1" required>Wonosari</option>
                                      <option value="2" required>Gendro</option>
                                      <option value="3" required>Tlogosari</option>
                                      <option value="4" required>Blarang</option>
                                      <option value="5" required>Kayukebek</option>
                                      <option value="6" required>Andosari</option>
                                      <option value="7" required>Pungging</option>
                                      <option value="8" required>Tutur</option>
                                      <option value="9" required>Kalipucang</option>
                                      <option value="10" required>Sumberpitu</option>
                                      <option value="11" required>Ngembal</option>
                                      <option value="12" required>Tempuran</option>
                                    </select> 
                              </div>
                      <div class="form-group row">
                        <label for="kelompok" class="col-md-3 form-control-label">Kelompok : </label>
                        <input type="text" id="kelompok" name="kelompok" style="width:75%;" value="{{$anggotaadm->kelompok}}" required>
                      </div>

                      

                    <button type="submit" class="rg">Update</button> 
                    <button type="reset" class="rg">Reset</button>
                    </form>
</div>
                  </div>
                </div>
                <!-- End Example Basic Constraints -->
              </div>
            </div>
          </div>
        </div>        </div>

                </div>
        </div>
      </div>
    </div>

    </div>
    <!-- End Page -->

@endsection