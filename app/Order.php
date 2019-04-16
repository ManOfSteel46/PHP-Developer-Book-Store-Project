<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function book(){
    	return $this->hasMany('App\Books');
    }
}
