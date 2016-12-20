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

    public function categories(){
      return $this->belongsTo('App\Categories');
    }

    public function tags(){
      return $this->belongsToMany('App\Tags', 'tags_movies');
    }

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

}
