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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/tasks/create', "TaskController@create");			// make tasks
Route::put('/tasks/{id}/done', "TaskController@done");			// mark done the task and get 10 XP
Route::delete('/tasks/{id}/delete', "TaskController@delete");	// delete 1 task and inflict 10 damage