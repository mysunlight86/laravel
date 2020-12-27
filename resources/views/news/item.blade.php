@extends('layouts.main')

@section('title')
    @parent News
@endsection

@section('content')
    <h1>{{$news['title']}}</h1>
    <p>{{$news['content']}}</p>
@endsection
