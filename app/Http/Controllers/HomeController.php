<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index() {
    	$user = Auth::user();

    	return view('home')->with('user', $user)->with('player', $user->player);
    }

    public function logout() {
    	Auth::logout();

    	return redirect('login');
    }
}
