<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenderController extends Controller
{
    public function home()
    {
        return view('euro.home');
    }
}
