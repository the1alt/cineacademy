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

Route::get('/', function () {
    return view('pages/welcome');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/faq', function () {
    return view('pages/faq');
});

Route::get('/mention', function () {
    return view('pages/mention');
});

Route::group(['prefix' => 'movies'], function (){
  Route::get('/index', 'MoviesController@index')->name('index');
  Route::get('/create', 'MoviesController@create')->name('create');
  Route::get('/update', 'MoviesController@update')->name('update');
  Route::get('/remove/{id}', 'MoviesController@remove')->name('movies.remove');
});

Route::group(['prefix' => 'actors'], function (){
  Route::get('/index', 'ActorsController@index')->name('index');
  Route::get('/create', 'ActorsController@create')->name('create');
  Route::get('/update', 'ActorsController@update')->name('update');
  Route::get('/remove', 'ActorsController@remove')->name('remove');
});

Route::group(['prefix' => 'directors'], function (){
  Route::get('/index', 'DirectorsController@index')->name('index');
  Route::get('/create', 'DirectorsController@create')->name('create');
  Route::get('/update', 'DirectorsController@update')->name('update');
  Route::get('/remove', 'DirectorsController@remove')->name('remove');
});

Route::group(['prefix' => 'categories'], function (){
  Route::get('/index', 'CategoriesController@index')->name('index');
  Route::get('/create', 'CategoriesController@create')->name('create');
  Route::get('/update', 'CategoriesController@update')->name('update');
  Route::get('/remove', 'CategoriesController@remove')->name('remove');
});
