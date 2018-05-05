<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    //
    function medicationInfos(){
        return $this->belongsToMany('App\Medication_Info');
    }
}

