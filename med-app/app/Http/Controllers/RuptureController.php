<?php

namespace App\Http\Controllers;
use App\Rupture;
use Auth;
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
    if (Auth::check()) {
        
        $rupture->user_id =Auth::user()->id;}
    $rupture->save();
    

    return redirect('/rep');
}



}
