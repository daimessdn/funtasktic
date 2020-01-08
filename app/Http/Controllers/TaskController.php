<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

use App\Tasks;

class TaskController extends Controller
{
    // add tasks
    public function create(Request $request) {
    	$task = new Tasks;

    	$task->player_id = Auth::user()->id;
    	$task->task_name = $request->task_name;
    	$task->due = $request->due;

    	$task->save();

    	return redirect('home');
    }
}
