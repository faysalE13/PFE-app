<?php

namespace App\Http\Controllers;
use App\Rupture;
use App\Reponse;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    function med_valide(){
    $meds=Rupture::all();
    return view('pharmacie')->with("rupture",$meds);
}

function med_rep_four(){
    $reps=Reponse::all();
    return view('fourni')->with("reponse",$reps);
}

}
