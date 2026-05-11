@extends('main')
@section('title','Periode')
@section('content')
<a href="{{route('periode.create')}}" class="btn btn-xs btn-primary">Tambah</a>
<table class="table table-bordered text-center">
    <tr style="text-align: center">
        <th>Tahun Akademik</th>
        <th>Semester</th>
    </tr>
    @foreach ($result as $key=>$periode)
        <tr style="text-align: center">
            <td>{{$periode->tahun_akademik}}</td>
            <td>{{$periode->semester}}</td>
        </tr>
    @endforeach
</table>
@endsection