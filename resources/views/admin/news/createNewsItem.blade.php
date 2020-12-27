@extends('layouts.main')

@section('title')
    @parent Create news
@endsection

@section('content')
    <h1>News creation page</h1>
    {!! Form::open(['route' => 'admin_news_create-news']) !!}
        <div class="form-element">
            {!! Form::select('news[category]', ['e' => 'education', 'f' => 'food', 'r' => 'relax'], null, ['placeholder' => 'Pick a category...']) !!}
        </div>

        <div class="form-element">
            {!! Form::label('news[title]', 'Enter a news title:') !!}<br>
            {!! Form::text('news[title]', '', ['placeholder' => 'Title']) !!}
        </div>

        <div class="form-element">
            {!! Form::label('news[image]', 'Add an image:') !!}<br>
            {!! Form::file('news[image]') !!}
        </div>

        <div class="form-element">
            {!! Form::label('news[text]', 'Enter a news text:') !!}<br>
            {!! Form::textarea('news[text]','', ['placeholder' => 'News text']) !!}
        </div>
        
        {!! Form::submit('Send', ['class' => 'button']) !!}

    {!! Form::close() !!}
@endsection
