@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Warga') }}</div>

                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>NAMA</th>
                            <th>NIK</th>
                            <th>NO.KK</th>
                            <th>JENIS KELAMIN</th>
                            <th>ALAMAT</th>
                            <th>AKSI</th>
                        </tr>
                        @foreach($warga as $w)
                        <tr>
                            <td>{{$w->id}}</td>
                            <td>{{$w->nama}}</td>
                            <td>{{$w->nik}}</td>
                            <td>{{$w->no_kk}}</td>
                            <td>{{$w->jenis_kelamin}}</td>
                            <td>{{$w->alamat}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a class="btn btn-warning" href="/warga/{{$w->id}}/edit">Edit</a>
                                    <form action="/warga/{{$w->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                    </form>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <a class="btn btn-primary" href="/warga/create">Add Warga</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection