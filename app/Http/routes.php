<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', "PagesController@home");
Route::get('/about', "PagesController@about");


Route::get('cards', "CardsController@index");
//Route::get('cards/{id}', "CardsController@show");
Route::get('cards/{card}', "CardsController@show");
/*Route::get('cards/create', "CardsController@create");
Route::post('cards', "CardsController@store");

Route::get('cards/id/edit', "CardsController@edit");
Route::put('cards/id/edit', "CardsController@update");
Route::delete('cards/id/edit', "CardsController@delete");*/
/*Route::get('/', function () {
  $people = ['Filipe','Bruno','Lucas'];
  //  return view('welcome',['people'=>$people]);
  //return view('welcome')->with('people',$people);
  return view('welcome')->withPeople($people);
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/string', function () {
    return "Echo";
});*/
