<h1>News page {{$category}}</h1>
@foreach($newsCategory as $itemNews => $item)
    @php
        $url = route('news__item', ['category' => $category, 'id' => $itemNews]);
    @endphp
    <p>
        <a href='{{$url}}'>
            {{$item}}
        </a>
    </p>
@endforeach
