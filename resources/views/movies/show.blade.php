@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<h1>{{$movie->title}}</h1>
<h4>{{$movie->director}}</h4>
<p>{{$movie->genre}}</p>
<p>{{$movie->year_of_filming}}</p>
<p>{{$movie->storyline}}</p>
@endsection