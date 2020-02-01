<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user('api');
});

Route::get('tasks/', 'TaskApiController@index');
Route::get('tasks/{id}', 'TaskApiController@show');

Route::post('tasks/create', "TaskApiController@create");
Route::put('tasks/{id}', "TaskApiController@update");
Route::delete('tasks/{id}', "TaskApiController@delete");

Route::get('user/', 'TaskApiController@userIndex');
// Route::get('tasks/{id}', 'TaskApiController@show');

// Route::post('tasks/create', "TaskApiController@create");
// Route::put('tasks/{id}', "TaskApiController@update");
// Route::delete('tasks/{id}', "TaskApiController@delete");