<?php

namespace App\Http\Controllers;
use App\Reponse;
use App\Rupture;
use Illuminate\Http\Request;

class accueilController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }



     function acc(){
         return view ('accueil');
}

function med_rep(){
    $reps=Reponse::all();
    $ruu=Rupture::all();
    
        return view('rep')->with("reponse",$reps)->with("ruup",$ruu);
    
    
}

 
}
