<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AskController extends Controller
{
    public function getAsk()
    {
        return view('euro.ask');
    }

    public function postAsk(Request $request)
    {
        $input = $request->input();

        return redirect()->action('RenderController@visu6')
            ->withCookie('nom',$input['nom'])
            ->withCookie('prenom',$input['prenom'])
            ;
    }
}
