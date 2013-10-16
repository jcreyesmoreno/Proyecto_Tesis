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
	return View::make('home');
});


Route::get('/search', function()
{
	return View::make('buscar');
});

Route::get('/contact', function()
{
	return View::make('contacto');
});

Route::get('/about', function()
{
	return View::make('about');
});

Route::get('/newtesis', function()
{
	return View::make('admin.alta');
});

Route::get('/deletetesis', function()
{
	return View::make('admin.eliminar');
});

Route::get('/searchtesis', function()
{
	return View::make('admin.buscar');
});

Route::get('/logout', 'UserController@getExit');

Route::post('/userAdmin', 'UserController@loginUser');

Route::get('/user', 'UserController@getViewAdmin');

Route::get('/admin', 'UserController@getAdmin');

Route::post('/adminalta', 'UserController@getThesis');

//Metodo de POST del formulario para agregar una
//tesis  nueva
Route::post('/thesis', 'ThesisController@agregarTesis');


Route::get('/test', function () {

	 $user = Sentry::createUser(array(
        'email'    => 'wolverine1401@gmail.com',
        'password' => 'root',
    ));

	 return "usuario creado";

});




 