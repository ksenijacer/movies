@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<h1>Title:{{$movie->title}}</h1>
<h4>Director:{{$movie->director}}</h4>
<p>Genre:{{$movie->genre}}</p>
<p>Release year:{{$movie->year_of_filming}}</p>
<p>Storyline:{{$movie->storyline}}</p>
@endsection