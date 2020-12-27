@extends('layouts.main')

@section('title')
    Main @parent
@endsection

@section('content')
    <h1>News categories</h1>
    @foreach($categories as $id => $nameCategory)
        @php
            $url = route(
                'news_category', 
                ['categoryId' => $id]
            );
        @endphp
        <p>
            <a href='{{$url}}'>
                {{$nameCategory}}
            </a>
        </p>
    @endforeach
    <p>
        <a href="{{route('admin_news_create-category-view')}}">Create category</a>
    </p>
    <p>
        <a href="{{route('admin_news_create-news-view')}}">Create news</a>
    </p>
@endsection
