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
// 	return View::make('hello');

// });	
//
// Route::get('/', array('uses'=>'AuthorsController@index'));
// Route::get('data', array('uss'=>'AuthorsController@samp'));
// Route::get('login',function(){

// 	//$title="homepage";
// 	return View::make('home.master');
// 	//->with('title',$title);
// });

// Route::get('/', array('as' => 'home', function () {
//     return View::make('login');
// }));

// Route::get('login', array('as' => 'login', function () {
//     return View::make('login');
// }))->before('guest');


// Route::post('login', function () {
//         $user = array(
//             'username' => Input::get('username'),
//             'password' => Input::get('password')
//         );
        
//         if (Auth::attempt($user)) {
//             return Redirect::route('home')
//                 ->with('flash_notice', 'You are successfully logged in.');
//         }
        
//         // authentication failure! lets go back to the login page
//         return Redirect::route('login')
//             ->with('flash_error', 'Your username/password combination was incorrect.')
//             ->withInput();
// });
// Route::get('logout', array('as' => 'logout', function () {
//     Auth::logout();

//     return Redirect::route('home')
//         ->with('flash_notice', 'You are successfully logged out.');
// }))->before('auth');

// Route::get('profile', array('as' => 'profile', function () {
//     return View::make('profile');
// }))->before('auth');
   
    Route::controller('/','IndexController');
     //Route::controller('admin','Admin\AdminController@getlogin');
    //Route::controller('admin/getLogin', 'Admin\AdminController');
//     Route::group(array('prefix' => 'admin'), function() {
//     Route::resource('/', 'Admin\AdminController');
// });