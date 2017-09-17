<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demend_de_emp extends Model
{
    //
	public $table="demend_de_emps";

	public function user(){
		return $this->belongsTo('App/User');
	}

	
}
