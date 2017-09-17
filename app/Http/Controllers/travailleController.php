<?php

namespace App\Http\Controllers;
use App\Demend_de_emp;
use Illuminate\Http\Request;
use Auth;

class travailleController extends Controller
{
    //
	
	public function travaille(Request $request)
    {
		if($request->isMethod('post')){
			
			$newdemend=new Demend_de_emp();
			$newdemend->nom=$request->input('nom');
			$newdemend->prenom=$request->input('prenom');
			$newdemend->wadifa=$request->input('wadifa');
			$newdemend->argent=$request->input('ajr');
			$newdemend->wilaya=$request->input('wilaya');
			$newdemend->daira=$request->input('daira');
			$newdemend->baladia=$request->input('commune');
			$newdemend->num_t=$request->input('tel');
			$newdemend->adr=$request->input('adr');
			$newdemend->fatra=$request->input('temp');
			$newdemend->motatalabat=$request->input('motatalabat');
			$newdemend->nombre_emp=$request->input('nombre');
			$newdemend->info=$request->input('info');
			$newdemend->id_user=Auth::user()->id ;
			$newdemend->save();
		}
		
		$demend=Demend_de_emp::paginate(4);
		 $arr=Array('demend'=>$demend,);
        return view('Les pages.travaille',$arr);
    }
	
	public function show_demend($id){
		$demend=Demend_de_emp::find($id);
		 $arr=Array('demend'=>$demend);
		return view('Les pages.show_demend',$arr);
	}
	public function recherche_travaille(Request $request){


			$wilaya = $request->input('wilaya');
			$domin_travaille = $request->input('domin_travaille');
			$temp_travaille = $request->input('temp_travaille');

		if (!empty($wilaya) && !empty($domin_travaille) && !empty($temp_travaille)) {
			
			$demend=Demend_de_emp::where([
                    ['wilaya', '=', $wilaya],
                    ['fatra', '=', $temp_travaille],
                    ['wadifa','=',$domin_travaille]
                ])->paginate(5);
			$arr=Array('demend'=>$demend);
       		return view('Les pages.travaille',$arr);
		}else{
			if (!empty($wilaya) && !empty($domin_travaille) && empty($temp_travaille)) {
				$demend=Demend_de_emp::where([
                    ['wilaya', '=', $wilaya],
                    
                    ['wadifa','=',$domin_travaille]
                ])->paginate(5);
				$arr=Array('demend'=>$demend);
       			return view('Les pages.travaille',$arr);
			}else{
				if (!empty($wilaya) && empty($domin_travaille) && !empty($temp_travaille)) {
					$demend=Demend_de_emp::where([
                    ['wilaya', '=', $wilaya],
                    ['fatra', '=', $temp_travaille]
                    
                	])->paginate(5);
					$arr=Array('demend'=>$demend);
       				return view('Les pages.travaille',$arr);
				}else{
					if (!empty($wilaya) && empty($domin_travaille) && empty($temp_travaille)) {
						$demend=Demend_de_emp::where([
                   		['wilaya', '=', $wilaya]
                		])->paginate(5);
						$arr=Array('demend'=>$demend);
       					return view('Les pages.travaille',$arr);
					}else{
						if (empty($wilaya) && !empty($domin_travaille) && !empty($temp_travaille)) {
							# code...
							$demend=Demend_de_emp::where([
                    			
                    			['fatra', '=', $temp_travaille],
                    			['wadifa','=',$domin_travaille]
                			])->paginate(5);
							$arr=Array('demend'=>$demend);
       						return view('Les pages.travaille',$arr);
						}else{
							if (empty($wilaya) && !empty($domin_travaille) && empty($temp_travaille)) {
								# code...
								$demend=Demend_de_emp::where([
                    				
                    				['wadifa','=',$domin_travaille]
                				])->paginate(5);
								$arr=Array('demend'=>$demend);
       							return view('Les pages.travaille',$arr);
							}else{
								if (empty($wilaya) && empty($domin_travaille) && !empty($temp_travaille)) {
									# code...
									$demend=Demend_de_emp::where([                    					
                    					['fatra', '=', $temp_travaille],                   					
                					])->paginate(5);
									$arr=Array('demend'=>$demend);
       								return view('Les pages.travaille',$arr);
								}else{
									# code ...
									$demend=Demend_de_emp::paginate(5);
									$arr=Array('demend'=>$demend);
       								return view('Les pages.travaille',$arr);
								}
							}
						}
					}
				}
			}
		}
		
	}
	/*
	public function show_demend($id){
		$demend=Demend_de_emp::find($id);
		 $arr=Array('demend'=>$demend);
		return view('Les pages.show_demend',$arr);
	}*/
	
}
