@extends('templates.default')
@section('main')
<form action="{{route('calon.update',$calon->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  {{method_field('PATCH')}}
  <div class="box-header with-border">
          <i class="fa fa-info-circle"></i> <i><b>(*)</b> harus diisi !</i>
  </div>
  <br>
  <div class="form-group row">
      <label for="inputNik" class="col-sm-3 col-form-label">NIK*</label>
      <div class="col-sm-8">
          <input name="nik" type="number" class="form-control" id="inputNik" disabled required="number" value="{{$calon->nik}}">
      </div>
  </div>
  <div class="form-group row">
      <label for="inputFoto" class="col-sm-3 col-form-label">Foto*</label>
      <div class="col-sm-8">
        <input type="hidden" name="old_foto"value="{{$calon->foto}}">
          <input name="foto" type="file" class="form-control" id="inputFoto">
      </div>
  </div>
  <div class="form-group row">
      <label for="inputNama" class="col-sm-3 col-form-label">Nama Calon*</label>
      <div class="col-sm-8">
          <input name="nama" type="text" class="form-control" id="inputNama" required="text" value="{{$calon->nama}}">
      </div>
  </div>
  <div class="form-group row">
      <label for="inputDeskripsi" class="col-sm-3 col-form-label">Deskripsi*</label>
      <div class="col-sm-8">
          <input name="deskripsi" type="text" class="form-control" id="inputDeskripsi" required="text" value="{{$calon->deskripsi}}">
      </div>
  </div>
  <div class="form-group row">
      <label for="inputPendidikan" class="col-sm-3 col-form-label">Pendidikan*</label>
      <div class="col-sm-8">
          <input name="pendidikan" type="text" class="form-control" id="inputPendidikan" required="text" value="{{$calon->pendidikan}}">
      </div>
  </div>
  <div class="form-group row">
      <label for="inputPengalaman" class="col-sm-3 col-form-label">Pengalaman*</label>
      <div class="col-sm-8">
          <input name="pengalaman" type="text" class="form-control" id="inputPengalaman" required="text" value="{{$calon->pengalaman}}">
      </div>
  </div>
  <div class="form-group row">
      <label for="inputKeterangan" class="col-sm-3 col-form-label">Keterangan*</label>
      <div class="col-sm-8">
          <input name="keterangan" type="text" class="form-control" id="inputKeterangan" required="text" value="{{$calon->keterangan}}">
      </div>
  </div>
  <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
      <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
      </form>
  </div>
@endsection
