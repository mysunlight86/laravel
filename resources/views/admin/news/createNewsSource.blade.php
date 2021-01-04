@extends('layouts.main')

@section('title')
    @parent Create source
@endsection

@section('content')
    <h1>Source creation page</h1>
    {!! Form::open(['route' => 'admin_news_create-source']) !!}
        
        {!! Form::label('source', 'Enter source url:') !!}<br>
        
        {!! Form::text('source', '') !!}<br>
        
        {!! Form::submit('Send', ['class' => 'button']) !!}

    {!! Form::close() !!}
@endsection
