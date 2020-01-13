<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Task;

class DoneController extends Controller
{
    public function index() {
    	$user = Auth::user();

    	return view('done')->with('user', $user)->with('player', $user->player)->with('tasks', $user->player->task->where('completed', '=', 1)->sortBy('due'));
    }
}
