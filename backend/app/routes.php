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

Route::get('/', function()
{
	return View::make('login');
});

Route::post('login', 'UserController@UserLogin');
Route::resource('dashboard', 'HomeController');
Route::resource('customers', 'CustomerController');
Route::resource('customers/{idCustomer}/documentation', 'CustomerController@getDocumentation');
Route::post('customer/documentation', 'CustomerController@postDocumentation');





Route::get('logout', function()
{
	Auth::logout();
	return Redirect::to("/");
});
