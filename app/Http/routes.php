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

Route::get('nous-connaitre', function()
{
    return view('mission');
});

Route::get('livre', function()
{
    return view('livre');
});

Route::get('bilan', function()
{
    return view('bilan');
});

Route::get('charte', function()
{
    return view('chartre');
});

Route::get('culte', function()
{
    return view('culte');
});
Route::get('évenement', function()
{
    return view('events');
});

Route::get('intercéssion', function()
{
    return view('intercession');
});

Route::get('les-chretiens-persecutes', function()
{
    return view('chretiens_persecutes');
});

Route::get('soyons-unis', function()
{
    return view('soyons-unis');
});

Route::get('mentions-legales', function()
{
    return view('mentions-legales');
});

Route::get('telechargement', function()
{
    return view('documentdrive');
});

Route::get('equipe', function()
{
    return view('equipe');
});

Route::get('vision', function()
{
    return view('vision');
});

Route::get('info', function()
{
    return view('info');
});

Route::get('avenir', function()
{
    return view('avenir');
});
Route::get('blog/{$id}', function()
{
    return view('articles.show');
});


Route::get('blog/tag/{tag}', 'BlogController@showArticlesWithtag');


Route::resource('blog', 'BlogController');

Route::get('actualites', 'WelcomeController@actualites');


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
*/
Route::resource('home', 'HomeController');

Route::resource('evangelisation', 'EvangelisationController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


/*Email: Contact us*/
Route::post('contact-us', 'WelcomeController@contactUs');
