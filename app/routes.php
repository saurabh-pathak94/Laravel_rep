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
// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::post('logout', array('uses' => 'HomeController@logout'))->after('invalidate-browser-cache'); //->before('auth.basic')

Route::get('homepage',array('uses' => 'HomeController@after_login'));
Route::get('counter.php',array('uses'=>'HomeController@ajaxfn'));
Route::get('/', function()
{
	return View::make('hello');
});
