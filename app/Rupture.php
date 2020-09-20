<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rupture extends Model
{
    //


    function repons(){
        return $this->hasMany('App\Reponse');
    }
    function use(){
        return $this->belongsTo('App\Reponse');
    }

}
