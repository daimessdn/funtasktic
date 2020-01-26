<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller {

    public function testauth1(Illuminate\Http\Request $request) {
        return $request->user();
    }

    public function testauth2() {
        return auth()->user(); // returns user
    }

}