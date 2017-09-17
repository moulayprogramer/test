<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baladia extends Model
{
    //
	public $table="baladias";

	public function daira(){
		return $this->belongsto('App/Daira');
	}
}
