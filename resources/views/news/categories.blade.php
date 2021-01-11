@extends('layouts.main')

@section('title')
    Categories @parent
@endsection

@section('content')
    <h1>News categories</h1>
    @foreach($categories as $item)
        @php
            $url = route(
                'news_category', 
                ['categoryId' => $item->id]
            );
        @endphp
        <p>
            <a href='{{$url}}'>
                {{$item->name}}
            </a>
        </p>
    @endforeach
@endsection
