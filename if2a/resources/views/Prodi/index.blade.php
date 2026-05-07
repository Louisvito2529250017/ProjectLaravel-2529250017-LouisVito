@extends('main')
@section('title','Program Studi')
@section('content')
<table border="1" cellpadding="10">
    <tr style="text-align: center">
        <th>No</th>
        <th>Nama Prodi</th>
        <th>Singkatan</th>
        <th>Kaprodi</th>
        <th>Fakultas</th>
    </tr>
    @foreach ($prodis as $key=>$prodi)
        <tr style="text-align: center">
            <td>{{$key + 1}}</td>
            <td>{{$prodi->nama_prodi}}</td>
            <td>{{$prodi->singkatan}}</td>
            <td>{{$prodi->kaprodi}}</td>
            <td>{{$prodi->fakultas->nama_fakultas ?? '-'}}</td>
        </tr>
    @endforeach
</table>
@endsection