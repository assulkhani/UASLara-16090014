@extends('templates.default')
@section('main')
<form action="{{route('pemilih.update',$pemilih->id)}}"method="post">
  @csrf
  {{method_field('PATCH')}}
  <div class="box-header with-border">
          <i class="fa fa-info-circle"></i> <i><b>(*)</b> harus diisi !</i>
  </div>
  <br>
  <div class="form-group row">
      <label for="inputNik" class="col-sm-3 col-form-label">NIK*</label>
      <div class="col-sm-8">
          <input name="nik" type="text" disabled class="form-control" id="nik" required="text" value="{{$pemilih->nik}}">
      </div>
  </div>
  <div class="form-group row">
      <label for="inputNama" class="col-sm-3 col-form-label">Nama Pemilih*</label>
      <div class="col-sm-8">
          <input name="nama" type="text" class="form-control" id="inputNama" required="text" value="{{$pemilih->nama}}">
      </div>
  </div>
  <div class="form-group row">
      <label for="inputTempat" class="col-sm-3 col-form-label">Tempat Lahir*</label>
      <div class="col-sm-8">
          <input name="tempat" type="text" class="form-control" id="inputTempat" required="text" value="{{$pemilih->tempat_lahir}}">
      </div>
  </div>
  <div class="form-group row">
      <label for="inputTanggal" class="col-sm-3 col-form-label">Tanggal Lahir*</label>
      <div class="col-sm-8">
          <input name="tanggal" type="date" class="form-control" id="tanggal" required="text" value="{{$pemilih->tanggal_lahir}}">
      </div>
  </div>
  <div class="form-group row">
      <label for="inputAlamat" class="col-sm-3 col-form-label">Alamat*</label>
      <div class="col-sm-8">
        <textarea name="alamat" class="form-control" id="alamat" required="text">{{$pemilih->alamat}}</textarea>
      </div>
  </div>
  <div class="form-group row">
      <label for="inputJenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin*</label>
      <div class="col-sm-8">
        <select name="jk" class="form-control">
          <option value="laki-laki" @if ($pemilih->jenis_kelamin=='laki-laki'){{"selected"}}@endif>laki-laki</option>
          <option value="perempuan" @if ($pemilih->jenis_kelamin=='perempuan'){{"selected"}}@endif>perempuan</option>
        </select>
      </div>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
  </div>
</div>

</form>
@endsection
