<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'address',
        'dob',
        'phone_number',
        'occupation'
    ];
    //
    function healthHistory(){
        return $this->hasOne('App\HealthHistory');
    }
    function user(){
        return $this->belongsTo('App\User');
    }
}
