@extends('layouts.main')

@section('title')
    @parent Create category
@endsection

@section('content')
    <h1>Category creation page</h1>
    {!! Form::open(['url' => 'foo/bar']) !!}
        //
    {!! Form::close() !!}
    <form action="{{route('admin_news_create')}}" method="post">
        @csrf
        <label>
            <p>Enter category name</p>
            <input type="text" name="category">
        </label><br>
        <input type="submit" class="button">
    </form>
@endsection
