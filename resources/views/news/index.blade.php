@extends('layouts.main')

@section('title')
    Main @parent
@endsection

@section('content')
    <h1>All news</h1>
    @forelse($news as $item)
        <h2>{{$item->title}}</h2>
        <p>{{$item->text}}</p>
        <a href="{{route('news_item', $item->id)}}">
            Read more...
        </a>
        <hr>
    @empty
        <p>No news</p>
    @endforelse

    <div class="pagination">{{$news->links()}}</div>
@endsection
