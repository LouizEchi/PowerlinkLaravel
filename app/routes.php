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

Route::get('/LoginForm', function()
{
	return View::make('Modular Plugins/LogInForm');
});

Route::get('/', function()
{
	return View::make('Home');
});

Route::get('/Sample', function()
{
	return View::make('Sample');
});


Route::get('/About us', function(){

	 return View::make('About us');
});

Route::get('/Order', function(){

	 return View::make('Order');
});

Route::get('/Packages', function(){

	 return View::make('Packages');
});

Route::get('/Equipment', function(){

	 return View::make('Equipment');
});

Route::get('/Employees', function(){

	 return View::make('Employees');
});

Route::resource('profile', 'employeeController');
	// route to showlogin the login form
	Route::get('', array('uses' => 'HomeController@showLogin'));

	// route to process the form
	Route::post('', array('uses' => 'HomeController@doLogin'));