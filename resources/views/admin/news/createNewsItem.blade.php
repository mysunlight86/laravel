@extends('layouts.main')

@section('title')
    @parent Make news
@endsection

@section('content')
    @php
        $categoriesSelect = [];
        foreach($categories as $item)
        {
            $categoriesSelect[$item->id] = $item->name;
        }

        $sourcesSelect = [];
        foreach($sources as $item)
        {
            $sourcesSelect[$item->id] = $item->url;
        }        
    @endphp

    <h1>{{$title}}</h1>
    {!! Form::open(['route' => [$rout, $news->id]]) !!}
    
        <div class="form-element">
            {!! Form::select('news[category_id]', $categoriesSelect, $news->category_id, ['placeholder' => 'Pick a category...']) !!}
        </div>
        <!-- @dump($news['category']); -->
        <div class="form-element">
            {!! Form::select('news[source_id]', $sourcesSelect, $news->source_id, ['placeholder' => 'Pick a source...']) !!}
        </div>

        <div class="form-element">
            {!! Form::label('news[title]', 'Enter a news title:') !!}<br>
            {!! Form::text('news[title]', $news->title, ['placeholder' => 'Title']) !!}
        </div>

        <div class="form-element">
            {!! Form::label('news[text]', 'Enter a news text:') !!}<br>
            {!! Form::textarea('news[text]', $news->text, ['placeholder' => 'News text']) !!}
        </div>
        
        @if ($news->id) 
            {!! Form::submit('Edit', ['class' => 'button']) !!}
        @else
            {!! Form::submit('Add news', ['class' => 'button']) !!}
        @endif

    {!! Form::close() !!}
@endsection
