@extends('main')
@section('title','Fakultas')
@section('content')
<a href="{{route('fakultas.create')}}" class="btn btn-xs btn-primary">Tambah</a>
<table class="table table-bordered text-center">
    <tr style="text-align: center">
        <th>Nama</th>
        <th>Singkatan</th>
    </tr>
    @foreach ($result as $key=>$fakultas)
        <tr style="text-align: center">
            <td>{{$fakultas->nama_fakultas}}</td>
            <td>{{$fakultas->alias_fakultas}}</td>
        </tr>
    @endforeach
</table>
@endsection