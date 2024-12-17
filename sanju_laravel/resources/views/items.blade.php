<h1>Items</h1>
<ul>
    @foreach ($items as $item)
        @if(isset($item['dress']))
            <li>{{$item['dress']}}-${{$item['dress_price']}}</li>
        @endif
        @if(isset($item['shoe']))
            <li>{{$item['shoe']}}-${{$item['shoe_price']}}</li>
        @endif
        @if(isset($item['watch']))
            <li>{{$item['watch']}}-${{$item['watch_price']}}</li>
        @endif
    @endforeach
</ul>