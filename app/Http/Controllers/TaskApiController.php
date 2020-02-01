<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Task;
use App\User;
use App\Player;

class TaskApiController extends Controller
{
    public function index() {
    	return Task::all();
    }

    public function show($id) {
    	return Task::find($id);
    }

    public function create(Request $request) {
    	$task = new Task;

    	$task->player_id = Auth::user()->id;
    	$task->task_name = $request->task_name;
        $task->task_tag = $request->task_tag;
    	$task->task_desc = $request->task_desc;
    	$task->due = $request->due;

        $task->save();

    	// return $task->create($request->all());
    }

    public function update(Request $request, $id) {
    	$task = Task::findOrFail($id);

    	return $task->update($request->all());
    }

    public function delete(Request $request, $id) {
    	$task = Task::findOrFail($id);

    	return $task->delete();
    }

    // user API
    public function userIndex() {
        $user = Auth::user();

        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        ]);
    }
}
