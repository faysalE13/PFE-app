<?php

namespace App\Http\Controllers;
use App\User;
use App\Rupture;
use App\Reponse;

use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
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


 public function edit()
    {   
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            if ($user) {
                return view('edit')->withUser($user);
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
        $user = Auth::user();
        return view('edit', compact('user'));
    }

    public function update(Request $request)
    { 
        $user = User::find(Auth::user()->id);
        if ($user) {

            $validate = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            
            'position' => ['required', 'string', 'max:255'],
            'phon' => ['required', 'string', 'max:255'],

        ]);
             $user->nom=$request->nom;
             $user->prenom=$request->prenom;
             $user->email=$request->email;
             $user->position=$request->position;
             $user->phon=$request->phon;
             $user->save();
             $request->session()->flash('success','vous avez bien modiffier');

            return redirect('/profil');
        }else{
            return redirect()->back();
        }
       

    return redirect('/liste_pharmacie');
    }

function show(){

    if (Auth::user()->type == "pharmacie") {
        
    
     $profil=User::where('id',Auth::user()->id)->get();
     $meds=Rupture::all();
     return view('pharmacie')->with("prof",$profil)->with("rup",$meds);

    }
    elseif (Auth::user()->type == "fournisseur") {

          $profil=User::where('id',Auth::user()->id)->get();
          $reps=Reponse::all();
          return view('pharmacie')->with("prof",$profil)->with("reponse",$reps);
          }

}




}
