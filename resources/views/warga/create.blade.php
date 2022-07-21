@extends('layouts.app')

@section('content')

<div class="container">
<h2>Create Warga</h2>
<form action="/warga/store" method="POST">
@csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
  <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">NIK</label>
  <input type="text" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="NIK">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">No Kartu Keluarga</label>
  <input type="text" name="no_kk" class="form-control" id="exampleFormControlInput1" placeholder="No Kartu Keluarga">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
<select name="jenis_kelamin" class="form-select" aria-label="Default select example">
  <option selected>Pilih Jenis Kelamin</option>
  <option value="L">Laki-laki</option>
  <option value="P">Perempuan</option>
</select>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
  <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<input class="btn btn-info" type="submit" name="submit" value="Save">
    
</form>
</div>


@endsection