<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenderController extends Controller
{
    public function home()
    {
        return view('euro.home');
    }

    public function visu_()
    {
        return view('euro.visu2');
    }

    public function visu3()
    {
        return view('euro.visu3');
    }

    public function visu4()
    {
        return view('euro.visu4');
    }
}
