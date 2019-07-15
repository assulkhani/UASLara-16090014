@extends('templates.default')
@section('main')
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>DAFTAR PEMILIH</h2>
                    <ul class="nav navbar-right">
                    <ol class="breadcrumb">
                        <li><a href="{{asset('/')}}"><i class="fa fa-sekilas_pandang"></i> Beranda</a></li>
                        <li><i class="fa fa-laptop"></i> Project</li>
                        <li class="active"><a href="{{asset('input_data_pemilih')}}">Daftar Pemilih</a></li>
                    </ol>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div class="col-6">
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahModal">
                        <span class="fa fa-plus"></span> Tambah Data
                        </button>
                    </div>
                    <div class="title_right">
                      <div class="pull-right top_search">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="search">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                          </span>
                        </div>
                      </div>
                    </div>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap table-hover" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th class="text-center" width="120px">#</th>
                          <th class="text-center">NIK</th>
                          <th class="text-center">Nama Pemilih</th>
                          <th class="text-center" >Tempat Lahir</th>
                          <th class="text-center" >Tanggal Lahir</th>
                          <th class="text-center" width="120px">Alamat</th>
                          <th class="text-center" width="120px">Jenis Kelamin</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php $no = 1 ?>
                        @foreach($pemilih as $pem)
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$pem->nik}}</td>
                          <td>{{$pem->nama}}</td>
                          <td>{{$pem->tempat_lahir}}</td>
                          <td>{{$pem->tanggal_lahir}}</td>
                          <td>{{$pem->alamat}}</td>
                          <td>{{$pem->jenis_kelamin}}</td>
                          <td>{{$pem->status}}</td>

                          <td class="text-center">
                            <a href="{{route('pemilih.edit',$pem->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                              <a href="{{route('pemilih.destroy',$pem->id)}}" onclick="return confirm('Apakah Anda Akan Menghapus Data !')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        <?php $no++ ?>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@stop


@section('modal')
    <!-- Modal Create -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">INPUT DAFTAR PEMILIH</h4>
                </div>
                <div class="modal-body">
                  <form action="{{route('pemilih.store')}}"method="post">
                    @csrf
                    <div class="box-header with-border">
                            <i class="fa fa-info-circle"></i> <i><b>(*)</b> harus diisi !</i>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="inputNik" class="col-sm-3 col-form-label">NIK*</label>
                        <div class="col-sm-8">
                            <input name="nik" type="number" class="form-control" id="nik" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNama" class="col-sm-3 col-form-label">Nama Pemilih*</label>
                        <div class="col-sm-8">
                            <input name="nama" type="text" class="form-control" id="inputNama" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputTempat" class="col-sm-3 col-form-label">Tempat Lahir*</label>
                        <div class="col-sm-8">
                            <input name="tempat" type="text" class="form-control" id="inputTempat" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputTanggal" class="col-sm-3 col-form-label">Tanggal Lahir*</label>
                        <div class="col-sm-8">
                            <input name="tanggal" type="date" class="form-control" id="tanggal" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAlamat" class="col-sm-3 col-form-label">Alamat*</label>
                        <div class="col-sm-8">
                          <textarea name="alamat" class="form-control" id="alamat" required="text"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputJenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin*</label>
                        <div class="col-sm-8">
                          <select name="jk" class="form-control">
                            <option value="laki-laki">laki-laki</option>
                            <option value="perempuan">perempuan</option>
                          </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
                </div>
              </form>

            </div>
        </div>
    </div>


    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="editModalLabel">EDIT PEMILIH</h4>
                </div>
                <div class="modal-body">
                    <div class="box-header with-border">
                            <i class="fa fa-info-circle"></i> <i><b>(*)</b> harus diisi !</i>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="editNik" class="col-sm-3 col-form-label">NIK*</label>
                        <div class="col-sm-8">
                            <input name="nik" type="text" class="form-control" id="editNik" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editNama" class="col-sm-3 col-form-label">Nama Pemilih*</label>
                        <div class="col-sm-8">
                            <input name="nama" type="text" class="form-control" id="editNama" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editTempat" class="col-sm-3 col-form-label">Tempat Lahir*</label>
                        <div class="col-sm-8">
                            <input name="tempat" type="text" class="form-control" id="editTempat" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editTanggal" class="col-sm-3 col-form-label">Tanggal Lahir*</label>
                        <div class="col-sm-8">
                            <input name="tanggal" type="text" class="form-control" id="editTanggal" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editAlamat" class="col-sm-3 col-form-label">Alamat*</label>
                        <div class="col-sm-8">
                            <input name="alamat" type="text" class="form-control" id="editAlamat" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editJenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin*</label>
                        <div class="col-sm-8">
                            <input name="jenisKelamin" type="text" class="form-control" id="editJenis_kelamin" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editStatus" class="col-sm-3 col-form-label">Status*</label>
                        <div class="col-sm-8">
                            <input name="status" type="text" class="form-control" id="editStatus" required="text">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>


<!--Modal Delete-->
<div class="modal small fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <i class="fa fa-warning modal-icon"></i><h5>Apakah anda yakin ingin menghapus data ini?</h5>
            </div>
            <div class="modal-footer">
              <button type="submit" href="#" class="btn btn-danger"  id="modalDelete">Hapus</button>
              <button class="btn btn-default"data-dismiss="modal" aria-hidden="true">Batal</button>

            </div>
        </div>
    </div>
</div>
@stop
