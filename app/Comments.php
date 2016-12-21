<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{

    /**
     * Attribut qui précise le nom de la table référente à la base de donnée
     */
    protected $table = "comments";


    public static function getNbValidComments(){
      return DB::table('comments')
        ->where('state', '>=', 1)
        ->count();
    }

    public function user(){
      return $this->belongsTo('App\User');
    }

}
