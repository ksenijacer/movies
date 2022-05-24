@extends('layouts.app')

@section('title', 'movies')

@section('content')
<ul>
    @foreach($movies as $movie)
    <li>{{ $movie->title }} : {{ $movie->storyline }}</li>
    @endforeach
</ul>
@endsection