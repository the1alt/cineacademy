<?php

namespace App\Http\Controllers;

use App\Movies;
use Illuminate\Http\Request;
use Validator;

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
   * Page créer un film
   * Controlleur qui capture la requete
   * pour controller les donnéesentrantes (POST)
   */
   public function create(Request $request){

     if ($request->isMethod('post')) {

       $validator = Validator::make($request->all(), [
         'title' => 'required|min:4',
        //  'type' => 'required',
        //  'duree' => 'required',
        //  'date_release' => 'required',
        //  'image' => 'required',
        //  'trailer' => 'required',
         'synopsis' => 'required',
         'description' => 'required',
        //  'note_presse' => 'required',
        //  'languages' => 'required',
        //  'bo' => 'required',
        //  'distributeur' => 'required',
        //  'visible' => 'required',
        //  'cover' => 'required',
       ]);

       if($validator->fails()){
         return redirect('movies/create')
            ->withErrors($validator)
            ->withInput();
       }
       else{

         $dateOutput = \DateTime::createFromFormat('m/d/Y', $request->date_release);
         $dureeOutputTable = explode(':', $request->duree);
         $dureeOutput = $dureeOutputTable[0]*60 + $dureeOutputTable[1];

         $movie = new Movies();
         $movie->title = $request->title;
         $movie->type = $request->type;
         $movie->duree = $dureeOutput;
         $movie->date_release = $dateOutput->format('Y-m-d');
         $movie->image = $request->image;
         $movie->trailer = $request->trailer;
         $movie->synopsis = $request->synopsis;
         $movie->description = $request->description;
         $movie->note_presse = $request->note_presse;
         $movie->languages = $request->languages;
         $movie->bo = $request->bo;
         $movie->distributeur = $request->distributeur;
         $movie->visible = $request->visible;
         $movie->cover = $request->cover;
         $movie->administrators_id=0;
         $movie->save();

         return redirect('movies/create');
       }

     }


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

    //  exit(dump($movie->comments()));

     $previousMovie = Movies::where('id', '<', $movie->id)->max('id');

     $nextMovie = Movies::where('id', '>', $movie->id)->min('id');

     return view('movies/detail', [
       'movie' => $movie,
       'prev' => $previousMovie,
       'next' => $nextMovie,
     ]);
   }

}
