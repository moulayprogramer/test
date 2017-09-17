<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Cv;
use App\Demend_de_emp;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Auth;
use Intervention\Image\ImageManagerStatic as Image;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     *
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_date = Carbon::now()->format('Y-m-d');
        $Registered_today_count = User::where('created_at' ,'like' ,$current_date.'%')->count();
        $aamel_today_count = Cv::where('created_at' ,'like' ,$current_date.'%')->count();
        $wadifa_today_count = Demend_de_emp::where('created_at' ,'like' ,$current_date.'%')->count();
        $Registered_count = User::all()->count();
        $aamel_count = Cv::all()->count();
        $wadifa_count = Demend_de_emp::all()->count();
        $email = Contact::where('response','=','0')->get();
        $arr = Array(
            'user' => Auth::user(),
            'Registered_today_count'=> $Registered_today_count,
            'aamel_today_count' => $aamel_today_count,
            'wadifa_today_count' => $wadifa_today_count,
            'Registered_count' => $Registered_count,
            'aamel_count' => $aamel_count,
            'wadifa_count' => $wadifa_count,
            'email' => $email,
        );
        return view('admin.home',$arr);
    }
    public  function show_registered_today()
    {
        $current_date = Carbon::now()->format('Y-m-d');
        $registered_today =  User::where('created_at' ,'like' ,$current_date.'%')->paginate(10);
        $arr = Array('user'=>Auth::user(),'registered_today'=> $registered_today);
        return view('admin.admin pages.registered_today_list',$arr);
    }
    public function show_registered(){
        $registered =  User::paginate(10);
        $arr = Array('user'=>Auth::user(),'registered'=> $registered);
        return view('admin.admin pages.registered_list',$arr);
    }
    public function show_cv_today(){
        $current_date = Carbon::now()->format('Y-m-d');
        $cv_today =  Cv::where('created_at' ,'like' ,$current_date.'%')->paginate(10);
        $arr = Array('user'=>Auth::user(),'cv_today'=> $cv_today);
        return view('admin.admin pages.cv_today_list',$arr);
    }
    public function show_cv(){
        $cv =  Cv::paginate(10);
        $arr = Array('user'=>Auth::user(),'cv'=> $cv);
        return view('admin.admin pages.cv_list',$arr);
    }
    public function show_demend_empl_today(){
        $current_date = Carbon::now()->format('Y-m-d');
        $demend_empl_today =  Demend_de_emp::where('created_at' ,'like' ,$current_date.'%')->paginate(10);
        $arr = Array('user'=>Auth::user(),'demend_empl_today'=> $demend_empl_today);
        return view('admin.admin pages.demend_empl_today_list',$arr);
    }
    public function show_demend_empl(){
        $demend_empl =  Demend_de_emp::paginate(10);
        $arr = Array('user'=>Auth::user(),'demend_empl'=> $demend_empl);
        return view('admin.admin pages.demend_empl_list',$arr);
    }
    /**
     * @param Request $request
     */
    public  function update_avatar(Request $request){
        if ($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().'.'. $avatar->getClientOriginalExtension();
            $path = public_path('/avatar/'.$filename);
            Image::make($avatar)->resize(300,300)->save($path);

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
            return redirect('/admin');
        }else{
            $error = 'you are not chose any file';
             echo "<div class='alert alert-success' role='alert'>
            <strong>Ooooops !!</strong>
             $error </div>
            ";
        }
    }
    public function edit_account(){
        $arr = Array('user'=>Auth::user());
        return view('admin.admin pages.edit_account',$arr);
    }
    public function response_email($id){
        $email = Contact::find($id);
        $email->response = 1;
        $email->save();
        $arr = Array('user'=>Auth::user(),'email'=>$email);
        return view('admin.admin pages.email_reponde',$arr);
    }
}
