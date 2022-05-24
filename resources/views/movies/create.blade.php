@extends('layouts.app')

 @section('title', 'Add a movie')

 @section('content')
 <h1>Add a movie</h1>

 <form>
     <div class="form-group">
         <label for="title">Title</label>
         <input type="text" class="form-control" id="title" aria-describedby="titlelHelp" placeholder="Enter title">
     </div>

     <div class="form-group">
         <label for="director">Director</label>
         <input type="text" class="form-control" id="director" aria-describedby="directorlHelp" placeholder="Enter director">
     </div>

     <div class="form-group">
         <label for="genre">Genre</label>
         <input type="text" class="form-control" id="genre" aria-describedby=genrelHelp" placeholder="Enter genre">
     </div>


     <div class="form-group">
         <label for="year-of-filming">Year of filming</label>
         <input type="text" class="form-control" id="director" aria-describedby="yearOfFilmingHelp" placeholder="Enter year of filming">
     </div>
     <div class="form-group">
         <label for="storyline">Storyline</label>
         <textarea class="form-control" id="storyline" rows="5"></textarea>
     </div>

     <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 @endsection