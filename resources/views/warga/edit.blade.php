<h2>Edit Data Warga</h2>

<form action="/warga/{{$warga->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nama" placeholder="Nama" value="{{$warga->nama}}"><br>
    <input type="text" name="nik" placeholder="NIK" value="{{$warga->nik}}"><br>
    <input type="text" name="no_kk" placeholder="No KK" value="{{$warga->no_kk}}"><br>
    <select name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamain</option>
        <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki-laki</option>
        <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select><br>
    <textarea name="alamat" cols="30" rows="10" placeholder="Alamat">{{$warga->alamat}}</textarea><br>
    <input type="submit" name="submit" value="Save">
</form>