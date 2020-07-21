<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;
Use DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(Request $request){
    	if($request->isMethod('post')) {
			$data = $request->input();
			
    		if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password'], 'admin'=>'1'])) {
				// echo "Success"; die;
				Session::put('adminSession',$data['email']);
    			return redirect('/admin/dashboard');
    		}else{
				// echo "Failed"; die;
    			return redirect('/admin')->with('flash_message_error','Хэрэглэгчийн нэр эсвэл нууц үг буруу байна');
			}
    	}
		return view('admin.admin_login');
	}
	
    public function dashboard(){
		if(Session::has('adminSession')){
			
			$postCount = DB::table('posts')->get()->count();
			$pageCount = DB::table('pages')->get()->count();
			$infoCount = DB::table('infos')->get()->count();

			}else{
				return redirect('/admin')->with('flash_message_error','Нэвтэрч орно уу');
			}
				// echo "test"; die;
			
    	return view('admin.dashboard')->with(compact('postCount','pageCount','infoCount'));
	}
    

	public function settings(){
        $adminDetails = User::where(['id'=>1])->first();
        //echo "<pre>"; print_r($adminDetails); die;
        return view('admin.settings')->with(compact('adminDetails'));
	}
	
	public function chkPassword(Request $request){
		$data = $request->all();
		$current_password = $data['current_pwd'];
		$check_password = User::where(['admin' => '1'])->first();
		if(Hash::check($current_password,$check_password->password)){
			echo "true"; die;
		}else{
			echo "false"; die;
		}
	}
	
	public function updatePassword(Request $request){
		if($request->isMethod('post')){
			$data = $request->all();
			$check_password = User::where(['email' => Auth::user()->email])->first();
			$current_password = $data['current_pwd'];
			if(Hash::check($current_password, $check_password->password)){
				$password = bcrypt($data['new_pwd']);
				User::where('id','2')->update(['password'=>$password]);
				return redirect('/admin/settings')->with('flash_message_success','Нууц үг амжилттай солигдлоо');
			}else {
				return redirect('admin/settings')->with('flash_message_error','Өмнөх нууц үг буруу байна');
			}
		}
	}

	public function logout(){
    	// echo 'test'; die;
    	Session::flush();
    	return redirect('/admin')->with('flash_message_success','Амжилттай гарлаа');
	}

	
}
