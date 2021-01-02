@extends('layouts.main')

@section('title')
    @parent Category
@endsection

@section('content')
    <h1>News page of category</h1>
    @forelse ($news as $item)
        @php
            $titleNews = $item->{'title'};

            $url = route(
                'news_item', 
                ['id' => $item->{'id'}]
            );
        @endphp

        <p>
            <a href='{{$url}}'>{{$titleNews}}</a>
        </p>
        @empty
            No news
    @endforelse
@endsection
