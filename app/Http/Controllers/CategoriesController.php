<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
  /**
   * Page lister category
   */
   public function index(){

     $categories = Categories::all();

     return view('categories/index', [
       'categories' => $categories,
       'nbCat' => count($categories)
     ]);
   }
  /**
   * Page créer category
   */
   public function create(){
     return view('categories/create');
   }
  /**
   * Page modifier categories
   */
   public function update(){
     return view('categories/update');
   }
  /**
   * Page supprimer categories
   */
   public function remove(){
     return view('categories/remove');
   }



}
