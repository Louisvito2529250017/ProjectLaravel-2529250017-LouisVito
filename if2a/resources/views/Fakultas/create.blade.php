@extends('main')
@section('title','Tambah Fakultas')
@section('content')
    <form action="{{route('fakultas.store')}}" method="post">
        <div class="form-group">
            <label for="">Nama Fakultas</label>
            <input type="text" name="nama_fakultas" class="form-control">
        </div>
        @error('nama_fakultas')
            <div class="text-danger">{{$message}}</div>   
        @enderror
        <div class="form-group">
            <label for="">Singkatan</label>
            <input type="text" name="alias_fakultas" class="form-control">
        </div>
        @error('singkatan')
            <div class="text-danger">{{$message}}</div>   
        @enderror
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection