<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class GLStreetController extends Controller
{
    public function index(Request $request)
    {
        return view('GLStreet');
    }
}

