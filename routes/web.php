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
route::get('/login', 'AuthController@index');
route::post('/login/verify', 'AuthController@verify');
route::get('/logout', 'HomeController@logout');

// home
Route::get('/home', 'HomeController@index');

// task interactions
Route::post('/tasks/create', "TaskController@create");			// make tasks
Route::get('/tasks/{id}/done', "TaskController@done");			// mark done the task and get 10 XP