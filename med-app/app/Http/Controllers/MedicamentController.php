<?php

namespace App\Http\Controllers;
use App\Medicament;
use Auth;
use Illuminate\Http\Request;

class MedicamentController extends Controller
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
    function ajouter(){
        return view('ajout_med');
    }


    function store(Request $request){
         $medicament= new Medicament ;
    
   
    $medicament->user_id =Auth::user()->id;

    $medicament->id_ENREGISTREMENT =$request->disp;

    $medicament->CODE =$request->code;

    $medicament->DCI=$request->dci;    
    $medicament->NOM_DE_MARQUE =$request->nom_med;

    $medicament->FORME =$request->form;
    $medicament->DOSAGE =$request->dosage;
    $medicament->COND =$request->cond;
    $medicament->PAYS =$request->pays;

    $medicament->TYPE =$request->type_med;
    $medicament->PPA =$request->ppa;
    $medicament->REMBOURSEMENT =$request->remboursement;
    $medicament->TARIF =$request->tarif;
    $medicament->save();
    return redirect('/profil');
}













 public function edit($id)
    {   
        if (Auth::check() && (Auth::user()->type == "pharmacie")){
        $medicame =Medicament::find($id);
        return view('edit_med', compact('medicame'));}
    }

    public function update(Request $request , $id)
    { 
              $medicame =Medicament::find($id);      

              $medicame->CODE =$request->code;

              $medicame->DCI=$request->dci;    
              $medicame->NOM_DE_MARQUE =$request->nom_med;
         
              $medicame->FORME =$request->form;
              $medicame->DOSAGE =$request->dosage;
              $medicame->PAYS =$request->pays;

              $medicame->PPA =$request->ppa;
              $medicame->REMBOURSEMENT =$request->remboursement;
              $medicame->TARIF =$request->tarif;
              $medicame->save();
              $request->session()->flash('success','vous avez bien modiffier');
    return redirect('/profil/med');
       

    }










function show(){
    $medicame=Medicament::all();
    return view('list_med')->with("med",$medicame);
}


function sho(){
    if (Auth::user()->type == "pharmacie"){
   $medicame=Medicament::where('user_id',Auth::user()->id)->get();
   return view('profil_med')->with("med",$medicame);}
}





}
