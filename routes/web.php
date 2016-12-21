<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PageController@welcome')->name('welcome');

Route::get('/about', function () {
    return view('pages/about');
})->name('about');

Route::get('/contact', function () {
    return view('pages/contact');
})->name('contact');

Route::get('/faq', function () {
    return view('pages/faq');
})->name('faq');

Route::get('/mention', function () {
    return view('pages/mention');
})->name('mention');

Route::group(['prefix' => 'movies'], function (){
  Route::get('/index', 'MoviesController@index')->name('movies.index');
  Route::get('/create', 'MoviesController@create')->name('movies.create');
  Route::get('/update', 'MoviesController@update')->name('movies.update');
  Route::get('/remove/{id}', 'MoviesController@remove')->name('movies.remove');
  Route::get('/detail/{id}', 'MoviesController@detail')->name('movies.detail');
});

Route::group(['prefix' => 'actors'], function (){
  Route::get('/index', 'ActorsController@index')->name('actors.index');
  Route::get('/create', 'ActorsController@create')->name('actors.create');
  Route::get('/update', 'ActorsController@update')->name('actors.update');
  Route::get('/remove/{id}', 'ActorsController@remove')->name('actors.remove');
  Route::get('/detail/{id}', 'ActorsController@detail')->name('actors.detail');
});

Route::group(['prefix' => 'directors'], function (){
  Route::get('/index', 'DirectorsController@index')->name('directors.index');
  Route::get('/create', 'DirectorsController@create')->name('directors.create');
  Route::get('/update', 'DirectorsController@update')->name('directors.update');
  Route::get('/remove/{id}', 'DirectorsController@remove')->name('directors.remove');
});

Route::group(['prefix' => 'categories'], function (){
  Route::get('/index', 'CategoriesController@index')->name('categories.index');
  Route::get('/create', 'CategoriesController@create')->name('categories.create');
  Route::get('/update', 'CategoriesController@update')->name('categories.update');
  Route::get('/remove', 'CategoriesController@remove')->name('categories.remove');
});
