<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daira extends Model
{
    //
	public $table="dairas";

	public function wilaya(){
		return $this->belongsto('App/Wilaya');
	}
	

	public function baladias(){
		return $this->hasMany('App/Baladia');
	}
}
