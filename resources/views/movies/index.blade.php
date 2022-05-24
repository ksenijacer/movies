@extends('layouts.app')

@section('title', 'movies')

@section('content')
<ul>
    @foreach($movies as $movie)
    <li><a href="/movies/{{$movie->id}}">{{ $movie->title }} : {{ $movie->storyline }}</a></li>
    @endforeach
</ul>
@endsection