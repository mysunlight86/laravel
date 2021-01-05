@extends('layouts.main')

@section('title')
    @parent News
@endsection

@section('content')
    @dump($newsOne)
    <h1>{{$newsOne->title}}</h1>
    <img src="{{$newsOne->source}}" alt="Abstract image" class="image-news">
    <p>{{$newsOne->text}}</p>
    <a href="{{route('admin_news_edit-news-view', $newsOne->id)}}" class="button">Edit</a>
@endsection
