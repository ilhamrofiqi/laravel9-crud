@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Warga</h2>
    <form action="/warga/{{$warga->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama"
                value="{{$warga->nama}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="NIK"
                value="{{$warga->nik}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">No Kartu Keluarga</label>
            <input type="text" name="no_kk" class="form-control" id="exampleFormControlInput1"
                placeholder="No Kartu Keluarga" value="{{$warga->no_kk}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki-laki</option>
                <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1"
                rows="3">{{$warga->alamat}}</textarea>
        </div>
        <input class="btn btn-info" type="submit" name="submit" value="Save">
    </form>
</div>
@endsection
