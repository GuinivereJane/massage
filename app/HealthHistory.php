<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthHistory extends Model
{
    //
    function client(){
        return $this->belongsTo('App\Client');
    }
    function medicationInfo(){
        return $this->hasMany('App\MedicationInfo');
    }
    function otherTreatments(){
        return $this->hasMany('App\OtherTreatment');
    }
    function conditions(){
        return $this->hasMany('App\Condition');
    }

}
