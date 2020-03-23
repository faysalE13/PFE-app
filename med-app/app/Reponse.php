<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    //


    function user(){
    	return $this->belongsTo('App\User');
    }

     
}
