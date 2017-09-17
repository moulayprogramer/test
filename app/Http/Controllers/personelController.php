<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class personelController extends Controller
{

	
	public function personel()
    {
        $arr = Array('user'=>Auth::user());
        return view('Les pages.personel',$arr);
    }
}
