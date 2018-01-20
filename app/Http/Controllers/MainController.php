<?php

namespace Fortross\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return response()->view('start');
    }
}
