<?php

namespace App\Http\Controllers;

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
      
     function four(){
         return view ('fourni');
}
     function formu(){
         return view ('form');
}
     function repo(){
         return view ('rep');
}
}
