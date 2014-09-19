<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	//return View::make('hello');

// });
 Route::get('/', 'AuthorsController@add');

Route::get('data', array('uses'=>'AuthorsController@index'));

// Route::get('/',function(){

// 	//$title="homepage";
// 	return View::make('home.index');
// 	//->with('title',$title);
// });