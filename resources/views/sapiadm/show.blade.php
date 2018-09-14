@extends('layout.footer')

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
            <a href="{{route('admins.index')}}">
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
    <h1 class="page-title">Detail populasi sapi milik @foreach($a as $anggota){{$anggota->nama}}@endforeach</h1>
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
                  @foreach($a as $anggota)
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">No Anggota : </label>
                    <div class="col-md-9 form-control">
                      {{$anggota->no_anggota}}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Nama : </label>
                    <div class="col-md-9 form-control">
                      {{$anggota->nama}}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Jenis Kelamin : </label>
                    <div class="col-md-9 form-control">
                      {{$anggota->jenis_kelamin}}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Tempat Lahir : </label>
                    <div class="col-md-9 form-control">
                      {{$anggota->tempat_lhr}}
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
                      {{$anggota->no_regristasi}}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Dusun : </label>
                    <div class="col-md-9 form-control">
                      {{$anggota->dusun}}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Desa : </label>
                    <div class="col-md-9 form-control">
                      {{$anggota->desa}}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Kelompok : </label>
                    <div class="col-md-9 form-control">
                      {{$anggota->kelompok}}
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
                    <form autocomplete="off" action="{{route('sapiadms.store')}}" method="post">
                      @csrf
                      <div class="form-group row">
                        <div class="col-xl-2 col-md-2">
                          <label class="col-xl-12">Jenis Kelamin</label>
                          <div class="col-md-12">
                            <select class="form-control" data-plugin="select2" data-placeholder="Jenis kelamin" id="jenis_kelamin" disabled="">
                              <option value="0" selected required>Betina</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                          <label class="col-xl-12">Tipe</label>
                          <div class="col-xl-12">
                            <select class="form-control" data-plugin="select2" data-placeholder="Pilih tipe sapi" data-allow-clear="true" name="tipe_sapi" id="sapibetina" >
                              <option></option>
                              <option value="0" required>Lokal</option>
                              <option value="1" required>Gaduan</option>
                              <option value="2" required>Guliran</option>
                              <option value="3" required>Lain-lain</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                          <label class="col-xl-12">Fase</label>
                          <div class="col-md-12">
                            <select class="form-control" data-plugin="select2" data-placeholder="Pilih fase sapi" data-allow-clear="true" name="fase" id="fasebetina" >
                              <option></option>
                              <optgroup label="Pedet">
                                <option value="2" required>0-6 Bulan</option>
                                <option value="3" required>6-18 Bulan</option>
                              </optgroup>
                              <optgroup label="Dara">
                                <option value="4" required>Dara Bunting</option>
                                <option value="5" required>Dara Tdk Bunting</option>
                              </optgroup>
                              <optgroup label="Induk">
                                <option value="6" required>Laktasi Bunting</option>
                                <option value="7" required>Laktasi Tdk Bunting</option>
                                <option value="8" required>Kering Bunting</option>
                                <option value="9" required>Kering Tdk Bunting</option>
                              </optgroup>
                            </select>
                          </div>
                        </div>
                        <div class="col-xl-2 col-md-2">
                          <label class="col-xl-12 col-md-12">Nomor Telinga</label>
                          <div class="col-md-12">
                            <input type="text" class="form-control" name="eartag" id="eartag" required>
                          </div>
                        </div>
                        <div class="col-xl-2 col-md-2">
                          <label class="col-xl-12">Status</label>
                          <div class="col-md-12">
                            <select class="form-control" id="status" data-plugin="select2" data-placeholder="Status" disabled="">
                              <option value="1" selected required>Hidup</option>
                            </select>
                          </div>
                        </div>
                        @foreach ($a as $anggota)
                        <input type="hidden" name="id_anggota" value="{{$anggota->id}}">
                        <input type="hidden" name="wilayah" value="{{$anggota->wilayah}}">
                        <input type="hidden" name="kelompok" value="{{$anggota->kelompok}}">
                        @endforeach
                        <input type="hidden" name="status" value="1">
                        <input type="hidden" name="jenis_kelamin" value="0">
                      </div>
                      <div class="form-group col-xl-12 text-right padding-top-m">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <span>&nbsp;&nbsp;&nbsp;</span>
                        <button type="submit" class="btn btn-primary" >Simpan</button>
                      </div>
                    </form>
                  </div>
                  <!-- End Tab Sapi Betina -->

                  <!-- Tab Sapi Jantan -->
                  <div class="tab-pane" id="SapiJantan" role="tabpanel">
                    <form autocomplete="off" action="{{route('sapiadms.store')}}" method="post">
                      @csrf
                      <div class="form-group row">
                        <div class="col-xl-2 col-md-2">
                          <label class="col-xl-12">Jenis Kelamin</label>
                          <div class="col-md-12">
                            <select class="form-control" data-plugin="select2" data-placeholder="Jenis kelamin" id="jenis_kelamin"  disabled>
                              <option selected required>Jantan</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                          <label class="col-xl-12">Tipe</label>
                          <div class="col-xl-12">
                            <select class="form-control" data-plugin="select2" data-placeholder="Pilih tipe sapi" data-allow-clear="true" name="tipe_sapi" id="sapijantan" >
                              <option></option>
                              <option value="0" required>Lokal</option>
                              <option value="1" required>Gaduan</option>
                              <option value="2" required>Guliran</option>
                              <option value="3" required>Lain-lain</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-xl-3 col-md-3">
                          <label class="col-xl-12">Fase</label>
                          <div class="col-md-12">
                            <select class="form-control" data-plugin="select2" data-placeholder="Pilih fase sapi" data-allow-clear="true" name="fase" id="fasejantan" >
                              <option></option>
                              <optgroup label="Pedet">
                                <option value="0" required>0-6 Bulan</option>
                                <option value="1" required>6-18 Bulan</option>
                              </optgroup>
                              <option value="10" required>Muda</option>
                              <option value="11" required>Dewasa</option>
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
                            <select class="form-control" id="status" data-plugin="select2" data-placeholder="Status"  disabled>
                              <option value="0">Mati</option>
                              <option value="1" selected required>Hidup</option>
                              <option value="2">Dijual</option>
                              <option value="3">Hilang</option>
                            </select>
                          </div>
                        </div>
                        @foreach ($a as $anggota)
                        <input type="hidden" name="id_anggota" value="{{$anggota->id}}">
                        <input type="hidden" name="wilayah" value="{{$anggota->wilayah}}">
                        <input type="hidden" name="kelompok" value="{{$anggota->kelompok}}">
                        @endforeach
                        <input type="hidden" name="status" value="1">
                        <input type="hidden" name="jenis_kelamin" value="1">
                      </div>
                      <div class="form-group col-xl-12 text-right padding-top-m">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <span>&nbsp;&nbsp;&nbsp;</span>
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
                    <th>Tindakan</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($b as $betina) 
                  <tr class="sapi{{$betina->id}}">
                    <td>{{$betina->id}}</td>
                    <td>{{$betina->tipe_sapi}}</td>
                    <td>{{$betina->eartag}}</td>
                    <td><button type="button" class="btn btn-outline btn-xs btn-info">{{$betina->fase}}</button></td>
                    <td class="actions">
                    <button class="edit-sapi btn btn-sm btn-icon btn-pure btn-default on-default edit-row" data-idsapi="{{$betina->id}}" data-anggota="{{$betina->id_anggota}}" data-jeniskel="{{$betina->jenis_kelamin}}" data-tipesapi="{{$betina->tipe_sapi}}" data-fase="{{$betina->fase}}" data-eartag="{{$betina->eartag}}" data-status="{{$betina->status}}"><i class="icon wb-edit" aria-hidden="true"></i></button>
                    <!-- <a href="{{'/sapiadms/'.$betina->id_anggota.'/editsapi/'.$betina->id}}"><button class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"><i class="icon wb-edit" aria-hidden="true"></i></button></a> -->
                  </td> 
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
                  <th>Tindakan</th>
                </tr>
              </thead>
              <tbody>
                @foreach($j as $jantan) 
                <tr class="sapi{{$jantan->id}}">
                  <td>{{$jantan->id}}</td>
                  <td>{{$jantan->tipe_sapi}}</td>
                  <td>{{$jantan->eartag}}</td>
                  <td><button type="button" class="btn btn-outline btn-xs btn-info">{{$jantan->fase}}</button></td>
                  <td class="actions">
                    <button class="edit-sapi btn btn-sm btn-icon btn-pure btn-default on-default edit-row" data-idsapi="{{$jantan->id}}" data-anggota="{{$jantan->id_anggota}}" data-jeniskel="{{$jantan->jenis_kelamin}}" data-tipesapi="{{$jantan->tipe_sapi}}" data-fase="{{$jantan->fase}}" data-eartag="{{$jantan->eartag}}" data-status="{{$jantan->status}}"><i class="icon wb-edit" aria-hidden="true"></i></button>
                    <!-- <a href="{{route('sapiadms.edit', $jantan->id)}}"><button class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"><i class="icon wb-edit" aria-hidden="true"></i></button></a> -->
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
  <!-- End Tabel Populasi Sapi Anggota -->
</div>
</div>
</div>
<!-- End Page -->



<!-- Modal -->
<div id="editSapi" class="modal fade"  aria-hidden="false" role="dialog">
<div class="modal-dialog modal-simple modal-center modal-lg">
  <form class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <h4 class="modal-title"></h4>
    </div>
    <div class="modal-body">
      <div class="form-group row">
        <div class="col-xl-2 col-md-2">
          <input type="hidden" class="form-control" id="idanggota_edit">
          <input type="hidden" class="form-control" id="idsapi_edit">
          <label class="col-xl-12">Jenis Kelamin</label>
          <div class="col-md-12">
            <select class="form-control" id="jeniskel_edit" data-placeholder="Jenis kelamin" >
              <option id="jeniskel_edit"></option>
              <option value="0" >Betina</option>
              <option value="1">Jantan</option>
            </select>
            <input type="text" class="form-control" id="jeniskel_edit">
          </div>
        </div>

        <div class="col-xl-3 col-md-3">
          <label class="col-xl-12">Tipe</label>
          <div class="col-xl-12">
            <select class="form-control" data-placeholder="Pilih tipe sapi" data-allow-clear="true" id="tipesapi_edit">
              <option id="tipesapi_edit"></option>
              <option value="0">Lokal</option>
              <option value="1">Gaduan</option>
              <option value="2">Guliran</option>
              <option value="3">Lain-lain</option>
            </select>
            <input type="text" class="form-control" id="tipesapi_edit">
          </div>
        </div>

        <div class="col-xl-3 col-md-3">
          <label class="col-xl-12">Fase</label>
          <div class="col-md-12">
            <select class="form-control"  data-placeholder="Pilih fase sapi" data-allow-clear="true" id="fase_edit">
              <option id="fase_edit"></option>
              <optgroup label="Pedet">
                <option value="2" >0-6 Bulan</option>
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
            <input type="text" class="form-control" id="fase_edit">
          </div>
        </div>

        <div class="col-xl-2 col-md-2">
          <label class="col-xl-12 col-md-12">Nomor Telinga</label>
          <div class="col-md-12">
            <input type="text" class="form-control" id="eartag_edit">
          </div>
        </div>

        <div class="col-xl-2 col-md-2">
          <label class="col-xl-12">Status</label>
          <div class="col-md-12">
            <select class="form-control" id="status_edit" data-placeholder="Status Sapi">
              <option id="status_edit"></option>
              <option value="0">Mati</option>
              <option value="1">Hidup</option>
              <option value="2">Dijual</option>
              <option value="3">Hilang</option>
            </select>
            
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <div class="form-group col-xl-12 text-right padding-top-m">
        <button class="btn btn-danger" data-dismiss="modal">Batal</button><span>&nbsp;&nbsp;&nbsp;</span>
        <button class="btn btn-primary editsapi" data-dismiss="modal">Simpan</button>
      </div>
    </div>
  </form>
</div>
</div>
<!-- End Modal -->

@endsection 