<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    //


    function user(){
    	return $this->belongsTo('App\User');
    }
    
function ruptur(){
    	return $this->belongsTo('App\Rupture');
    }
     
}
