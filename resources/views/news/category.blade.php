@extends('layouts.main')

@section('title')
    @parent Category
@endsection

@section('content')
    <h1>News page of category</h1>
    @forelse ($news as $id => $item)
        @php
            $url = route(
                'news_item', 
                ['id' => $id]
            );
        @endphp

        <p>
            <a href='{{$url}}'>{{$item['title']}}</a>
        </p>
        @empty
            No news
    @endforelse
@endsection
