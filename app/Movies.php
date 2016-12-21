<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Movies extends Model
{
    /**
     * Attribut qui précise le nom de la table référente à la base de donnée
     */
    protected $table = "movies";

    /**
     *    Connexions Tables
     */
    public function categories(){
      return $this->belongsTo('App\Categories');
    }

    public function tags(){
      return $this->belongsToMany('App\Tags', 'tags_movies');
    }

    public function actors(){
      return $this->belongsToMany('App\Actors', 'actors_movies');
    }

    public function comments(){
      return $this->hasMany('App\Comments');
    }





    /**
     * Statics function for dashboard
     */
    public static function getNbActiveMovies(){
      return DB::table('movies')
        ->where('visible', 1)
        ->count();
    }

    public static function getSumBudget(){
      return DB::table('movies')
        ->sum('budget');
    }

    public static function getAvgDuration(){
      return DB::table('movies')
        ->avg('duree');
    }

    public static function getLastMovies(){
      return DB::table('movies')
        ->orderBy('date_release', 'desc')
        ->take(6)
        ->get();
    }

    public static function getNbNotes($note){
      return DB::table('movies')
        ->where('note_presse', $note)
        ->count();
    }



}
