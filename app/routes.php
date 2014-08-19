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
//Mapeo con closures
/*Route::get('/', function()
{
	$data = [
	'name' => 'antonio', 
	'email' => 'antonio@mail.com',
	'location' => 'Lima',
	'direction' => 'Driven',
	'last_name' => 'Cachuan'
	];
	return View::make('hola')->withData($data);
	return View::make('todos.index');
});*/


//mapeo usuando el controller generado
Route::get('/', 'TodoListController@index');

//manera manual de generar rutas
//Route::get('/todos', 'TodoListController@index');
//Route::get('/todos/{id}', 'TodoListController@show');

//Forma dinamica de generar rutas
Route::resource('todos', 'TodoListController');


//forma de probar que estamos conectados a una DB
Route::get('/db', function(){
	//return DB::select('select database();');
	//return DB::select('show tables;'); mostrar las tablas
	//return DB::table('todo_lists')->get();//mostar el contenido de una tabla
	//DB::table('todo_lists')->insert(
	//	array('name' => 'Mi Lista')
	//);
	$result = DB::table('todo_lists')->where('name','martin')->first();
	return $result->name;
});

/*Route::get('/todos', function()
{
	return View::make('todos.index');
});*/

/*Route::get('/todos/{id}', function($id)
{
	return View::make('todos.show')->withId($id);
});
*/