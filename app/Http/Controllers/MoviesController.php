<?php

namespace App\Http\Controllers;

use App\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
  /**
   * Page lister film
   */
   public function index(){

     $movies = Movies::all()
     ;

     return view('movies/index', [
       'movies' => $movies
     ]);
   }
  /**
   * Page créer film
   */
   public function create(){
     return view('movies/create');
   }
  /**
   * Page modifier film
   */
   public function update(){
     return view('movies/update');
   }
  /**
   * Page supprimer film
   */
   public function remove($id){

     $movie = Movies::find($id);
     $movie->delete();

     return redirect()->back();
   }

   public function detail($id){
     $movie = Movies::find($id);
     return view('movies/detail', [
       'movie' => $movie
     ]);
   }

   public static function preview($id){
     $movies = Movies::all();
     $ids = [];
     foreach($movies as $movie) {
       $ids[]= $movie->id;
     }
     $key = array_search($id, $ids);
     if ($key === 1) {
       return false;
     }
     else
     {
       return detail($ids[$key-1]);
     }
   }
   public static function next($id){
     $movies = Movies::all();
     $ids = [];
     foreach($movies as $movie) {
       $ids[]= $movie->id;
     }
     $key = array_search($id, $ids);

       $newid = $ids[$key+1];
       $movie = Movies::find($newid);
       return view('movies/detail', [
         'movie' => $movie
       ]);;
   }
}
