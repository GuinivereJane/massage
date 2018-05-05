<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    function healthHistory(){
        return $this->hasOne('App\HealthHistory');
    }
    function user(){
        return $this->hasOne('App\User');
    }
}
