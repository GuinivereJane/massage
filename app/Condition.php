<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    protected $fillable = ['name'];
    //
    public function conditionCategory(){
        return $this->belongsTo('App\ConditionCategory');
    }
    public function conditions(){
        return $this->belongsToMany('App\Conditions');
    }

   
}
