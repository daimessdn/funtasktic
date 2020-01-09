<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Task;

class HomeController extends Controller
{
    public function index() {
    	$user = Auth::user();

    	return view('home')->with('user', $user)->with('player', $user->player)->with('tasks', $user->player->task->where('completed', '=', 0)->sortBy('due'));
    }

    public function logout() {
    	Auth::logout();

    	return redirect('login');
    }
}
