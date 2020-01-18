<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Task;

class TaskApiController extends Controller
{
    public function index() {
    	return Task::all();
    }

    public function show($id) {
    	return Task::find($id)->where('player_id', '=', Auth::user()->id);
    }

    public function create(Request $request) {
    	$task = new Task;

    	$task->player_id = Auth::user()->player->id;
    	$task->task_name = $request->task_name;
        $task->task_tag = $request->task_tag;
    	$task->task_desc = $request->task_desc;
    	$task->due = $request->due;

    	return $task->save();
    }
}
