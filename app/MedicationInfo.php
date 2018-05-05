<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicationInfo extends Model
{
    //
    function medication(){
        return $this->belongsTo('App\Medication');
    }
    function healthHistory(){
        return $this->belongsTo('App\HealthHistory');
    }
}
