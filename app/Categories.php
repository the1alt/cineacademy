<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";

    public function movies(){
      return $this->hasMany('App\Movies');
    }
}
