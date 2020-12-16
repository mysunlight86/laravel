@extends('layouts.main')

@section('title')
    Main @parent
@endsection

@section('content')
    <h1>News categories</h1>
    @foreach($news as $category => $arrayCategory)
        @php
            $url = route('news__category', ['category' => $category]);
        @endphp
        <p>
            <a href='{{$url}}'>
                {{$category}}
            </a>
        </p>
    @endforeach
@endsection
