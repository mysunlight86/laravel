@extends('layouts.main')

@section('title')
    Categories @parent
@endsection

@section('content')
    <h1>News categories</h1>
    @foreach($categories as $id => $nameCategory)
        @php
            $url = route(
                'news_category', 
                ['categoryId' => $id + 1]
            );
        @endphp
        <p>
            <a href='{{$url}}'>
                {{$nameCategory}}
            </a>
        </p>
    @endforeach
@endsection
