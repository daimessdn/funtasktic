<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\UsersExport;
use App\Exports\PlayersExport;
use App\Exports\TasksExport;
use App\Task;
use App\Player;

class HomeController extends Controller
{
    public function index() {
    	$user = Auth::user();

    	return view('home')->with('user', $user)->with('player', $user->player)->with('notifs', $user->player->notifcation)->with('tasks', $user->player->task->where('completed', '=', 0)->sortBy('due'));
    }

    public function logout() {
    	Auth::logout();

    	return redirect('login');
    }

    public function users_export() {        
        return Excel::download(new UsersExport, 'users.csv');
    }
    
    public function players_export() {
        return Excel::download(new PlayersExport, 'players.csv');
    }
    public function tasks_export() {
        return Excel::download(new TasksExport, 'tasks.csv');
    }
}
