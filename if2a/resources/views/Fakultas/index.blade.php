<ol>
    @foreach ($result as $item)
        <li>{{$item->nama_fakultas}} - {{$item->alias_fakultas}}</li>
    @endforeach
</ol>