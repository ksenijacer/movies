<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Requests\CreateMovieRequest;
use Illuminate\Support\Facades\DB;

class MoviesController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function create()
     {
         return view('movies.create');
     }

     public function store(CreateMovieRequest $request)
     {
         // procitamo podatke iz requesta
         // validiramo podatke
         // upisemo post u bazu
         // redirektujemo korisnika na single post stranicu
        //  $title = $request->get('title');
        //  $director = $request->get('director');
        //  $genre = $request->get('genre');
        //  $yearOfFilming = $request->get('year_of_filming');
        //  $storyline = $request->get('storyline');
         // $published = $request->get('published', false);

         // insert into posts (title, content) values ($title, $content)
        //  $movie = new Movie;
        //  $movie->title = $title;
        //  $movie->director = $director;
        //  $movie->genre = $genre;
        //  $movie->year_of_filming = $yearOfFilming;
        //  $movie->storyline = $storyline;
        //  $movie->save();

        $data = $request->validated();
        $movie = Movie::create($data);
        return redirect('/movies/' . $movie->id);

    }
}