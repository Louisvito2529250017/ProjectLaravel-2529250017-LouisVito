@extends('main')
@section('title','Mahasiswa')
@section('content')
<a href="{{route('mahasiswa.create')}}" class="btn btn-xs btn-primary">Tambah</a>
<table class="table table-bordered text-center">
    <tr style="text-align: center">
        <th>Nama</th>
        <th>NPM</th>
        <th>Foto</th>
        <th>Program Studi</th>
        <th>Aksi</th>
    </tr>
    @foreach ($mahasiswa as $key=>$mhs)
        <tr style="text-align: center">
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->npm}}</td>
            <td>
                @if ($mhs->foto)
                    <img src="{{asset('storage/fotos/$mhs->foto')}}" alt="Foto" width="100">
                @else
                    <p>Foto Tidak Tersedia</p>
                @endif
            </td>
            <td>{{$mhs->prodi->nama_prodi??'-'}}</td>
            <td>
                <a href="{{route('mahasiswa.create')}}" class="btn btn-warning btn-rounded">Edit</a>

                <form method="POST" action="{{route('mahasiswa.destroy',$mahasiswa->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                    data-toggle="tooltip" title="Delete"
                    data-nama='{{$mahasiswa->nama}}'>Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection