<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Wilaya;
use Auth;
use \Input as Input;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Les pages.page_principale');
    }
	 public function demend_de_emp()
    {
		$wilaya=Wilaya::all();
		 $arr_w=Array('wilaya'=>$wilaya);
		 
		 
		 
         return view('Les pages.demend_de_emp',$arr_w);
		 
		 
    }
	public function contact(Request $request){
        if ($request->isMethod('post')){
            $this->validate($request, [
                'email' => 'required|email',
                'object' => 'required|max:255',
                'message' => 'required|min:10|max:1000',

            ]);
            $contact = new Contact();
            $contact->email = $request->input('email');
            $contact->object = $request->input('object');
            $contact->message = $request->input('message');
            if(Auth::check()){
                $contact->id_user = Auth::user()->id;
            }
            $contact->save();
            return view('Les pages.merci contact');
        }else{
            return view('Les pages.contact');
        }
    }
	
	
	
	
	
	
	
	public function cv()
    {
        return view('Les pages.cv');
    }
	public function show_cv()
    {
		$show_cv=Demend_de_emp::all();
		 $arr=Array('show_cv'=>$show_cv);
		
        return view('Les pages.show_cv',$arr);
    }
	
	public function uploaded(Request $request)
    {
		if ($request->hasFile('file')){
			$filename=$request->file->getClientOriginalName();
			$request->file->storeAs('public/uploads',$filename);
			return 'لقد تم رفع الملف بنجاح';
		}else{
			
			return 'لم تقم باختيار ملف حتى الآن';
		}
		
    }
	
	public function page_principale()
    {
        return view('Les pages.page_principale');
    }
}
