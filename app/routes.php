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
    return View::make('user');
});

// Route de Lectura de XLS
Route::get('/usuarios', 'UserController@addUserExcel');

Route::get('/administrador', 'UserController@registerUser');

Route::get('/search', function()
{
  if(Sentry::check()){
    return View::make('buscar');
  }else{
      return Redirect::to('/user');
  }
});

Route::get('/newtesis', function()
{
  if(Sentry::check()){
      return View::make('admin.alta');
    }else{
      return Redirect::to('/user');
    }
  });

Route::get('/deletetesis', function()
{
  if(Sentry::check()){
      return View::make('admin.buscar');
    }else{
      return Redirect::to('/user');
    }
});

Route::get('/searchtesis', function()
{
  if(Sentry::check()){
      return View::make('admin.buscar');
    }else{
      return Redirect::to('/user');
    }
});

Route::get('/logout', 'UserController@getExit');

Route::post('/login', 'UserController@loginUser');

Route::get('/user', 'UserController@getViewAdmin');

Route::get('/admin', 'UserController@getAdmin');

Route::post('/adminalta', 'UserController@getThesis');


//Metodo de POST del formulario para agregar una
//tesis  nueva
Route::post('/thesis', 'ThesisController@agregarTesis');
Route::post('/thesis/delete', 'ThesisController@deleteTesis');

//metodo para buscar una tesis

Route::post('/search', 'ThesisController@buscarTesis');


Route::get('/indice/pdf/{id}', function ($id) {
  $Thesi = Thesis::find($id);
  if (file_exists($Thesi->index)) {
    $content = file_get_contents($Thesi->index);            
    return Response::make($content, 200, array('content-type'=>'application/pdf'));
  }else{
    return "Error Archivo Encontrado";
  }
});

Route::get('/prologo/pdf/{id}', function ($id) {
  $Thesi = Thesis::find($id);
  if (file_exists($Thesi->prologue)) {
    $content = file_get_contents($Thesi->prologue);            
    return Response::make($content, 200, array('content-type'=>'application/pdf'));
  }else{
        return "Error Archivo Encontrado";
  }
});

Route::get('/tesis/pdf/{id}', function ($id) {
  $Thesi = Thesis::find($id);
  if (file_exists($Thesi->thesis)) {
    $content = file_get_contents($Thesi->thesis);            
    return Response::make($content, 200, array('content-type'=>'application/pdf'));
  }else{
    return "Error Archivo Encontrado";
  }
});

?>

