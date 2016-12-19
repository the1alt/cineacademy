<?php

namespace App\Http\Controllers;

use App\Actors;
use Illuminate\Http\Request;

class ActorsController extends Controller
{
  /**
   * Page lister actors
   */
   public function index(){

     $actors = Actors::all();

     return view('actors/index', [
       'actors'=>$actors
     ]);
   }
  /**
   * Page créer actors
   */
   public function create(){
     return view('actors/create');
   }
  /**
   * Page modifier actors
   */
   public function update(){
     return view('actors/update');
   }
  /**
   * Page supprimer actors
   */
   public function remove(){
     return view('actors/remove');
   }
}
