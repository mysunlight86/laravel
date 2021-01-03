@extends('layouts.main')

@section('title')
    @parent News
@endsection

@section('content')
    <h1>{{$newsOne->title}}</h1>
    <img src="{{$newsOne->source}}" alt="Abstract image" class="image-news">
    <p>{{$newsOne->text}}</p>
@endsection
