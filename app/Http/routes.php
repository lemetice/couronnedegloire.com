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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('contact', function()
{
    return view('contacts');
});

Route::get('about', function()
{
    return view('about');
});

Route::get('livre', function()
{
    return view('livre');
});

Route::get('bilan', function()
{
    return view('bilan');
});

Route::get('chartre', function()
{
    return view('chartre');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
