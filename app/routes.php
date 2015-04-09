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

Route::resource('campaign', 'CampaignsController');

Route::resource('activities', 'ActivitiesController');

Route::resource('medals', 'MedalsController');

Route::resource('medals_obtained', 'MedalsObtainedController');

Route::any('/profile', [
  'as'   => 'user/profile',
  'uses' => 'UserController@profile'
]);
Route::any('/logout', [
  'as'   => 'user/logout',
  'uses' => 'UserController@logout'
]);
Route::any("/", [
 "as"   => "user/index",
 "uses" => "UserController@index"
]);

Route::any("/login", [
 "as"   => "user/login",
 "uses" => "UserController@login"
]);


Route::any("/showAvatarTitle", [
 "as"   => "user/showAvatarTitle",
 "uses" => "UserController@showAvatarTitle"
]);

Route::any("/showLevel", [
 "as"   => "user/showLevel",
 "uses" => "UserController@showLevel"
]);

Route::resource('admin/users','Admin_UsersController');

Route::get('google', array('as' => 'google', 'uses' => 'UserController@loginWithGoogle'));

Route::get('facebook', array('as' => 'facebook', 'uses' => 'UserController@loginWithFacebook'));

Route::get('twitter', array('as' => 'twitter', 'uses' => 'UserController@loginWithTwitter'));
//manera manual de generar rutas
//Route::get('/user/login', 'UserController@index');
//Route::get('/todos/{id}', 'TodoListController@show');

/*
Route::get("/path/{id}", function($id){
	return View::make('campaigns.show')->withId($id);
})->where('id', '[0-9]+');

*/

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


Route::post('activities/savegrade',array('as' => 'activities.savegrade', 'uses' => 'ActivitiesController@grade'));

Route::post('activities/savecomment',array('as' => 'activities.savecomment', 'uses' => 'ActivitiesController@comment'));

Route::post('activities/showcomment',array('as' => 'activities.showcomment', 'uses' => 'ActivitiesController@showcomment'));

Route::post('showlastcomment',array('as' => 'activities.showlastcomment', 'uses' => 'ActivitiesController@showlastcomment'));

//Route::get('next', array('as' => 'activities.next', 'uses' => 'ActivitiesController@next'));

Route::any('next', [
  'as'   => 'activities.next',
  'uses' => 'ActivitiesController@next'
]);


/*Route::get('/todos', function()
{
	return View::make('todos.index');
});*/

/*Route::get('/todos/{id}', function($id)
{
	return View::make('todos.show')->withId($id);
});
*/