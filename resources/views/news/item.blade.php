@extends('layouts.main')

@section('title')
    @parent
    {{$category}}
@endsection

@section('content')
    <h1>News {{$id}}</h1>
    <p>Эта новость из категории {{$category}}</p>
@endsection
