<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;

use App\User;

class AuthController extends Controller
{
    public function index() {
    	return view('auths.login');
    }

    public function verify(Request $request) {
    	if (Auth::attempt($request->only('email', 'password'))) {
            // Auth::login($request, true);
            return redirect('/home');
        }
        
        return redirect('/login');
    }

    public function register() {
    	return view('auths.register');
    }

    public function verify_register(Request $request) {
    	$user = new User;

    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = Hash::make($request->password);

    	$user->save();

    	DB::insert('insert into player (user_id) values (?)', [$user->id]);

    	Auth::login($user);
    	return redirect('home');
    }

}
