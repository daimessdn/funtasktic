<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function index() {
    	return view('auths.login');
    }

    public function verify(Request $request) {
    	if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/home');
        }
        
        return redirect('/login');
    }
}
