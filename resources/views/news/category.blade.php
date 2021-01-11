@extends('layouts.main')

@section('title')
    @parent Category
@endsection

@section('content')
    <h1>News page of category</h1>
    @forelse ($news as $item)
        @php
            $url = route(
                'news_item', 
                ['id' => $item->id]
            );
        @endphp

        <h2>{{$item->title}}</h2>
        <p>{{$item->text}}</p>
        <a href="{{$url}}">
            Read more...
        </a>
        @empty
            No news
    @endforelse

    {{$news->links()}}
@endsection
