<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
 

public function redirectTo(){
    if (Auth::user()->type == "pharmacie"){
        return ('/pharmacie');}
        elseif (Auth::user()->type == "fournisseur")
         {
            return ('/fourni');
        }else{
            return ('/acceuil');
        }
    }


   // protected $redirectTo = '/pharmacie';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'type' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'phon' => ['required', 'string', 'max:255'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => $data['type'],
            'position' => $data['position'],
            'phon' => $data['phon'],
        ]);
    }

function edit($id){
    $use=User::find($id);
    return view('edit',['pro'=>$use]);


    }
function updat(Request $request , $id){


    $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'type' => 'required',
            'position' => 'required',
            'phon' => 'required',

        ]);
    $user=User::find($id);
    //$user->nom = $request->get('nom');
    $user->prenom = $request->get('prenom');
    $user->email = $request->get('email');
    $user->type = $request->get('type');
    $user->position = $request->get('position');
    $user->phon = $request->get('phon');
    $user->save();
    return response()->json([
            'error' => false,
            'products'  => $user,
        ], 200);
    

     }


 /*public function edit(User $user)
    {   
        $user = Auth::user();
        return view('edit', compact('user'));
    }

    public function update(User $user,Request $request)
    { 
        $user = Auth::user();
        $this->validate(request(), [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'type' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'phon' => ['required', 'string', 'max:255'],

        ]);
        
           $user-> nom = $data['nom'];
           $user-> prenom = $data['prenom'];
           $user-> email = $data['email'];
           $user-> type = $data['type'];
           $user-> position = $data['position'];
           $user-> phon = $data['phon'];
        $user->save();

       /* $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->email=$request->email;
        $user->type=$request->type;
        $user->position=$request->position;
        $user->phon=$request->phon;
        $user->save();

    return redirect('/liste_pharmacie');
    }*/
function show(){
     $profil=User::where('id',Auth::user()->id)->get();
    return view('liste_pharmacie')->with("prof",$profil);
}
    
}
