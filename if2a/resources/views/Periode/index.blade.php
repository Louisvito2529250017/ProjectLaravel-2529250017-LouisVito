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
            <td>
                <a href="{{route('periode.edit')}}" class="btn btn-warning btn-rounded">Edit</a>
                <form method="POST" action="{{route('periode.destroy',$periode->id)}}">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                    data-toggle="tooltip" title="Delete"
                    data-nama='{{$periode->tahun_akademik}}'>Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection