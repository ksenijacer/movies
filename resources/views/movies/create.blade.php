@extends('layouts.app')

 @section('title', 'Create a movie')

 @section('content')
 <h1>Add a movie</h1>

 <form method="POST">
    @csrf
     <div class="form-group">
         <label for="title">Title</label>
         <input type="text" name ="title" class="form-control" id="title" aria-describedby="titlelHelp" placeholder="Enter title">
     </div>

     <div class="form-group">
         <label for="director">Director</label>
         <input type="text" name="director" class="form-control" id="director" aria-describedby="directorlHelp" placeholder="Enter director">
     </div>

     <div class="form-group">
         <label for="genre">Genre</label>
         <input type="text" name="genre" class="form-control" id="genre" aria-describedby=genrelHelp" placeholder="Enter genre">
     </div>

     <div class="form-group">
         <label for="year_of_filming">Year of filming</label>
         <input type="text" name="year_of_filming" class="form-control" id="year_of_filming" aria-describedby="yearOfFilmingHelp" placeholder="Enter year of filming">
     </div>

     <div class="form-group">
         <label for="storyline">Storyline</label>
         <textarea class="form-control" name="storyline" id="storyline" rows="5" placeholder="Write storyline..."></textarea>
     </div>

     <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 @endsection