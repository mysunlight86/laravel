@extends('layouts.main')

@section('title')
    @parent News
@endsection

@section('content')
    @php
        $titleNews = $newsOne[0]->{'title'};
        $sourceImageNews = $newsOne[0]->{'source'};
        $textNews = $newsOne[0]->{'text'};
    @endphp
    <h1>{{$titleNews}}</h1>
    <img src="{{$sourceImageNews}}" alt="Abstract image" class="image-news">
    <p>{{$textNews}}</p>
@endsection
