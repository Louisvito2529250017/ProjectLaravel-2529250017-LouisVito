@extends('main')
@section('title','Fakultas')
@section('content')
<a href="{{route('fakultas.create')}}" class="btn btn-xs btn-primary">Tambah</a>
<table class="table table-bordered text-center">
    <tr style="text-align: center">
        <th>Nama</th>
        <th>Singkatan</th>
        <th>Aksi</th>
    </tr>
    @foreach ($result as $key=>$fakultas)
        <tr style="text-align: center">
            <td>{{$fakultas->nama_fakultas}}</td>
            <td>{{$fakultas->alias_fakultas}}</td>
            <td>
                <a href="{{route('fakultas.edit')}}" class="btn btn-warning btn-rounded">Edit</a>

                <form method="POST" action="{{route('fakultas.destroy',$fakultas->id)}}">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                    data-toggle="tooltip" title="Delete"
                    data-nama='{{$fakultas->fakultas_nama}}'>Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection