<?php

namespace App\Http\Controllers;
use App\Reponse;
use App\Rupture;
use Auth;

use Illuminate\Http\Request;

class ReponseController extends Controller
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

    

    function store(Request $request){
    $request->validate([
    'disp' => 'required|max:50',
    
]);
    
    $reponse= new Reponse ;
    $reponse->disp=$request->disp;
    $reponse->user_id =Auth::user()->id;
    //$reponse->ruptur_id =Rupture::find(1);
    $reponse->save();
    return redirect('/profil');
}

function med_rep(){
    $reps=Reponse::all();
    return view('rep')->with("reponse",$reps);
}


}
