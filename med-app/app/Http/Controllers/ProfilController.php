<?php

namespace App\Http\Controllers;
use App\Profil;
use Auth;
use Illuminate\Http\Request;

class ProfilController extends Controller
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

    public function __construct(){
        $this->middleware('auth');
    }


    function store(Request $request){
    $request->validate([
    'nom' => 'required|alpha|max:50',
    'prenom' => 'required|alpha|max:50',
    'email' => 'required|max:60|email:rfc,dns',
]);
    $profil= new Profil ;
    $profil->nom=$request->nom;
    $profil->prenom=$request->prenom;
    $profil->email=$request->email;
    $profil->user_id = Auth::user()->id;
    $profil->position=$request->position;
    $profil->save();
    return redirect('/pharmacie');
}
 function liste_pharmacies(){
    $pharmacies=Profil::where('user_id',Auth::user()->id)->get();
    return view('liste_pharmacie')->with("profil",$pharmacies);
}



}
