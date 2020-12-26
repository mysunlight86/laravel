@extends('layouts.main')

@section('title')
    @parent News {{$id}}
@endsection

@section('content')
    <h1>News {{$id}}</h1>
    <p>Эта новость из категории {{$category}}</p>
@endsection
