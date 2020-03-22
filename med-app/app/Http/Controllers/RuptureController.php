<?php

namespace App\Http\Controllers;
use App\Rupture;

use Illuminate\Http\Request;

class RuptureController extends Controller
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
    'med'=> 'required|alpha|max:50',  
]);
    $rupture= new Rupture ;
    $rupture->med=$request->med;
    $rupture->save();
    return redirect('/rep');
}

 function med_valide(){
    $meds=Rupture::all();
    return view('pharmacie')->with("rupture",$meds);
}

}
