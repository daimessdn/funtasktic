<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// auth
route::get('/register', 'AuthController@register');
route::post('/register/verify', 'AuthController@verify_register');
route::get('/login', 'AuthController@index')->name('login');
route::post('/login/verify', 'AuthController@verify');

Route::group(['middleware' => 'auth'], function() {
	// home
	Route::get('/home', 'HomeController@index');
	Route::get('/done', 'DoneController@index');

	// task interactions
	Route::post('/tasks/create', "TaskController@create");			// make tasks
	Route::get('/tasks/{id}/done', "TaskController@done");			// mark done the task and get 10 XP
	Route::get('/tasks/{id}/undone', "TaskController@undone");			// mark done the task and get 10 XP
	Route::get('/tasks/{id}/update', "TaskController@update");		// mark done the task and get 10 XP
	Route::get('/tasks/{id}/delete', "TaskController@delete");		// delete 1 task and inflict 10 damage
	
	route::get('/logout', 'HomeController@logout');
});


// api test
Route::get('/test/api/tasks', function () {
	return view('task_list');
});

Route::get('auth', function () {
    return json_decode(auth('api')->user());
});