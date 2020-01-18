<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Task;

class TaskApiController extends Controller
{
    public function index() {
    	return Task::all()->where('player_id', '=', Auth::user()->id);
    }

    public function show($id) {
    	return Task::find($id);
    }

    public function create(Request $request) {
    	$task = new Task;

    	// // $task->player_id = Auth::user()->id;
    	// $task->task_name = $request->task_name;
     //    $task->task_tag = $request->task_tag;
    	// $task->task_desc = $request->task_desc;
    	// $task->due = $request->due;

    	return $task->create($request->all());
    }

    public function update(Request $request, $id) {
    	$task = Task::findOrFail($id);

    	return $task->update($request->all());
    }
}
