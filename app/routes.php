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

//Route::get('/user/login', array('uses' => 'UserController@showLogin'));

// route to process the form
//Route::post('/user/login', array('uses' => 'UserController@doLogin'));



Route::resource('user', 'UserController');

Route::any('/profile', [
  'as'   => 'user/profile',
  'uses' => 'UserController@profile'
]);
Route::any('/logout', [
  'as'   => 'user/logout',
  'uses' => 'UserController@logout'
]);
Route::any("/", [
 "as"   => "user/login",
 "uses" => "UserController@login"
]);

Route::resource('admin/users','Admin_UsersController');

//manera manual de generar rutas
//Route::get('/user/login', 'UserController@index');
//Route::get('/todos/{id}', 'TodoListController@show');

//Forma dinamica de generar rutas
//Route::get('/', 'TodoListController@index');
//Route::resource('todos', 'TodoListController');

//Route::resource('todos.items', 'TodoItemController');

//Route::resource('gamer', 'UserGameController');
//Route::resource('user', 'UserController');

//php artisan controller:make TodoListController
//forma de probar que estamos conectados a una DB
Route::get('/db', function(){
	//return DB::select('select database();');
	//return DB::select('show tables;'); mostrar las tablas
	return DB::table('user')->get();//mostar el contenido de una tabla
	//DB::table('todo_lists')->insert(
	//	array('name' => 'Mi Lista')
	//);
	//$result = DB::table('user')->where('username','antonio')->first();
	//return $result->name;
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