
@section('content')
<ol type="1">
    @foreach ($result as $item)
        <li>{{$item->tahun_akademik}} - {{$item->semester}}</li>
    @endforeach
</ol>
@endsection