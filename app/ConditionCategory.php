<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConditionCategory extends Model
{
    //
    protected $fillable = ['name'];

    public function conditions(){
        return $this->hasMany('App\Condition');
    }
    public function healthHistories(){
        return $this->belongsToMany('App\HealthHistory');
    }

    static function addCategory($name){
        ConditionCategory::create(compact('name'));
    }
}
