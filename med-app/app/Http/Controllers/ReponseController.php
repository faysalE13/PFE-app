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
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id)
    {   
        if (Auth::check() && (Auth::user()->type == "pharmacie")){
        
        $rupture=Rupture::find($id);
        return view('edit_reponse', compact('rupture'));
        }
    }

    function store(Request $request,$id){
    $request->validate([
    'disp' => 'required|max:50',
    
]);
    
    $reponse= new Reponse ;
    $rupture=Rupture::find($id);      
    $reponse->disp=$request->disp;
    $reponse->user_id =Auth::user()->id;
    $reponse->ruptur_id =$rupture->id;
    $reponse->save();

    return redirect('/profil');
}



}
