<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    //
	public $table="wilayas";

	public function dairas(){
		return $this->hasMany('App/Daira');
	}

}
