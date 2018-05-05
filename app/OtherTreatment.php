<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherTreatment extends Model
{
    //
    function healthHistory(){
        return $this->belongsTo('App\HealthHistory');
    }
}
