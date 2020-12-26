@extends('layouts.main')

@section('title')
    @parent Create category
@endsection

@section('content')
    <h1>Category creation page</h1>
    {!! Form::open(['route' => 'admin_news_create']) !!}
        
        {!! Form::label('category', 'Enter category name:') !!}<br>
        
        {!! Form::text('category', '') !!}<br>
        
        {!! Form::submit('Send', ['class' => 'button']) !!}

    {!! Form::close() !!}
@endsection
