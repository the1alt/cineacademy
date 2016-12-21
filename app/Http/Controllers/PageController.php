<?php

namespace App\Http\Controllers;

use App\Actors;
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
      $lastMovies = Movies::getLastMovies();
      $tabNotes = [
        "0" => Movies::getNbNotes(0),
        "1" => Movies::getNbNotes(1),
        "2" => Movies::getNbNotes(2),
        "3" => Movies::getNbNotes(3),
        "4" => Movies::getNbNotes(4),
        "5" => Movies::getNbNotes(5)
      ];
      $actorsNbMovies = Actors::getActorsNbMovies();

      return view('pages/welcome',[
        "nbMovies" => $nbMovies,
        "nbComments" => $nbComments,
        "sumBudgetMovies" => $sumBudgetMovies,
        "avgDuration" => $avgDuration,
        "lastMovies" => $lastMovies,
        "tabNotes" => $tabNotes,
        "actorsNbMovies" => $actorsNbMovies,
      ]);
    }
}
