<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogintesteController extends Controller
{
    public function login_teste(Request $request){
        return view('login_teste');
    }
}
