<?php

namespace App\Http\Controllers;
use App\Rupture;
use App\Reponse;
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
   /* $request->validate([
    'med'=> 'alpha|max:50',
    'dci'=> 'alpha|max:50',
    'code'=> 'max:50',  
]);*/
    $rupture= new Rupture ;
    $rupture->med=$request->med;
    //$rupture->med=$request->med1;
    //$rupture->med=$request->med2;
    if (Auth::check()) {
        
        $rupture->user_id =Auth::user()->id;}
       /* if ($rupture->med==null &&
             $rupture->dci==null &&
             $rupture->code==null) {
            return redirect('/');
             
        }else{*/
    $rupture->save();
    

    return redirect('/rep');
}
function med_rep(){
    
    $ruu=Rupture::all();
        return view('rep');
    
    
}





}
