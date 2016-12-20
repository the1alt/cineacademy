<?php

namespace App\Http\Controllers;

use App\Directors;
use Illuminate\Http\Request;

class DirectorsController extends Controller
{
  /**
   * Page lister directors
   */
   public function index(){

     $directors = Directors::all();

     return view('directors/index', [
        'directors' => $directors
     ]);
   }
  /**
   * Page créer directors
   */
   public function create(){
     return view('directors/create');
   }
  /**
   * Page modifier director
   */
   public function update(){
     return view('directors/update');
   }
  /**
   * Page supprimer director
   */
   public function remove($id){
     $director = Directors::find($id);
     $director->delete();

     return redirect()->back();
   }
}
