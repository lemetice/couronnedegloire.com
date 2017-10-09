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

Route::get('les-chretiens-persecutes', function()
{
    return view('chretiens_persecutes');
});

Route::get('soyons-unis', function()
{
    return view('soyons-unis');
});

Route::get('membre', function()
{
    return view('login');
});

/*
|--------------------------------------------------------------------------
| Articles Routes
|--------------------------------------------------------------------------
|Here is where we register all of the routes for CRUD operation on.
| articles.
|

Route::resource('home', 'ArticleController');
*/
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
