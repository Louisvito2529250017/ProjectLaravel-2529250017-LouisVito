@extends('main')
@section('title','Tambah Prodi')
@section('content')
    <form action="{{route('prodi.store')}}" method="post">
        <div class="form-group">
            <label for="">Nama Prodi</label>
            <input type="text" name="nama_prodi" class="form-control">
        </div>
        @error('nama_prodi')
            <div class="text-danger">{{$message}}</div>   
        @enderror
        <div class="form-group">
            <label for="">Singkatan</label>
            <input type="text" name="singkatan" class="form-control">
        </div>
        @error('singkatan')
            <div class="text-danger">{{$message}}</div>   
        @enderror
        <div class="form-group">
            <label for="">Kaprodi</label>
            <input type="text" name="kaprodi" class="form-control">
        </div>
        @error('kaprodi')
            <div class="text-danger">{{$message}}</div>   
        @enderror
        <div class="form-group">
            <label for="">Id Fakultas</label>
            <input type="text" name="fakultas" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection