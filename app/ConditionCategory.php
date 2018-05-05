<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConditionCategory extends Model
{
    //
    public function conditions(){
        return $this->hasMany('App\Condition');
    }
    public function healthHistories(){
        return $this->belongsToMany('App\HealthHistory');
    }
}
