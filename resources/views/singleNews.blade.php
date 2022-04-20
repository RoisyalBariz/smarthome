@extends('layout.main')

@section('container')

    <h1>{{ $post->title }}</h1>

    {!! $post->body !!}

    <p><a href="{{ $post->link }}">{{ $post->link }}</a></p>

    <a href="/MainNews">Back To Main News</a>

@endsection