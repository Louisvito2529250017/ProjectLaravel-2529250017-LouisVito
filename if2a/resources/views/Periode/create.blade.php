@extends('main')
@section('title','Tambah Periode')
@section('content')
    <form action="{{route('periode.store')}}" method="post">
        <div class="form-group">
            <label for="">Tahun Akademik</label>
            <input type="text" name="tahun_akademik" class="form-control">
        </div>
        @error('tahun_akademik')
            <div class="text-danger">{{$message}}</div>   
        @enderror
        <div class="form-group">
            <label for="">Semester</label>
            <input type="text" name="semester" class="form-control">
        </div>
        @error('semester')
            <div class="text-danger">{{$message}}</div>   
        @enderror
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection