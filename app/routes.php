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

Route::get('/', ['as' => 'dashboard', function()
{
	return View::make('hello');
}]);


Route::resource('client', 'ClientController');
Route::resource('supplier', 'SupplierController');
Route::resource('site', 'SiteController', ['except' => ['create']]);
Route::get('site/create/{data}', ['uses' => 'SiteController@create', 'as' => 'site.create_data']);