<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    protected $table = "actors";

    public static function getActorsNbMovies(){
      return DB::table('actors')
        -> join('actors_movies', 'actors.id', '=', 'actors_movies.actors_id')
        -> groupBy('actors_id')
        -> orderBy(DB::raw('count(actors_movies.movies_id)'), 'desc')
        -> select('actors.*')
        -> take(3)
        -> get();
    }

}
