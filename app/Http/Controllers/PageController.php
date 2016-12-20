<?php

namespace App\Http\Controllers;

use App\Movies;
use App\Comments;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     *
     */
    public function welcome(){

      $nbMovies = Movies::getNbActiveMovies();
      $nbComments = Comments::getNbValidComments();
      $sumBudgetMovies = Movies::getSumBudget();
      $avgDuration = Movies::getAvgDuration();

      return view('pages/welcome',[
        "nbMovies" => $nbMovies,
        "nbComments" => $nbComments,
        "sumBudgetMovies" => $sumBudgetMovies,
        "avgDuration" => $avgDuration,
      ]);
    }
}
