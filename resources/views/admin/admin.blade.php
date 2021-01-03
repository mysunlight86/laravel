@extends('layouts.main')

@section('title')
    Admin @parent
@endsection

@section('content')
    <h1>Admin Page</h1>
    <p>
        <a href="{{route('admin_news_create-category-view')}}">Create category</a>
    </p>
    <p>
        <a href="{{route('admin_news_create-news-view')}}">Create news</a>
    </p>
@endsection