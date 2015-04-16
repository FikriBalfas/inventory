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

Route::get('/home', function()
{
	return View::make('pages.home');
});

Route::get('/daftar', function()
{
	return View::make('pages.daftar');
});

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/helo', function()
{
	return "heloo, bro";
});

Route::get('/halo-juga','SiteController@haloJuga');

Route::get('blade-sample', function()
{
	return View::make('blade-sample');
});


