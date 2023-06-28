@extends('layouts.base')

@section('contents')
    <h2>Questi sono i film:</h2>

    @foreach ($movies as $movie)
    <ul>
        <li><h2>{{ $movie->title }}</h2></li>
        <li><h3>{{ $movie->original_title }}</h3></li>
        <li><h4>{{$movie->vote}}</h4></li>
    </ul>
    @endforeach

@endsection