<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

use App\Task;

class TaskController extends Controller
{
    // add tasks
    public function create(Request $request) {
    	$task = new Task;

    	$task->player_id = Auth::user()->player->id;
    	$task->task_name = $request->task_name;
    	$task->due = $request->due;

    	$task->save();

    	return redirect('home');
    }
}
