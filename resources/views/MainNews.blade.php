@extends('layout.main')

@section ('container')

@foreach ($posts as $apost)

    <article>
        <h2> {{ $apost->title }}</h2>
        <p> {{ $apost->excert }} <a href="/singleNews/{{ $apost->id }}"> Lihat Lebih Banyak </a></p>
    </article>

@endforeach

@endsection