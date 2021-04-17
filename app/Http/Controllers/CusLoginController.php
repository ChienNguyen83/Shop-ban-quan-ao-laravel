<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Session;
session_start();
use Illuminate\Http\Request;

class CusLoginController extends Controller
{
        public function getLogin(){
    	if (Session::has('Cus_name')) {
    		return redirect('trangchu');
    		 // return $next($request);
    	} else {
    		// return redirect('trangchu');
    		// return view('login');
    		return view('login');
    	}
    	

          
    }
    public function postLogin(Request $request){
    	$username = $request['uname'];
    	$password = $request['psw'];

    	if (Auth::attempt(['name'=>$username,'password'=>$password])) {
    		Session::put('Cus_name',$username);
    		return redirect('trangchu');
    		 // return $next($request);
    	} else {
    		Session::put('errorcus','Tài khoản hoặc mật khẩu chưa đúng');
    		return view('login');
    		
    		
    	}

    }
    public function logout(){
    	Session::forget('Cus_name');
    	Auth::Logout();
    	return redirect('login');
    }

    public function getSigup(){
    	return view('sigup');
    }
      public function postSigup(Request $request){
      	$username = $request->user_name;
      	$re_email = $request->email;
      	$pass = bcrypt($request->cus_pass);
      	//luu user vao csdl
      	$name = DB::table('Users')->select('name')->get();
      	$email = DB::table('Users')->select('email')->get();
      	
      	$allName = array();
      	$allEmail = array();
      	foreach ($name as $value) {
      		array_push($allName, $value->name);
      	}
      	foreach ($email as $value) {
      		array_push($allEmail, $value->email);
      	}
      	$b = in_array($username, $allName);
      	$a = in_array($re_email, $allEmail);




      	

       // dang nhap

      
    		if ($a || $b) {
    			Session::put('errorcus','Tên tài khoản hoặc email đã tồn tại');
    			return redirect('/sigup');
    		}else {
				$user = new User;
		  		$user->name = $username;
		  		$user->email = $email;
		  		$user->password = $pass;
		  		$user->save();
		  		Session::put('Cus_name',$username);
				return redirect('trangchu');
				 // return $next($request);
			
    		}







				    	
				    
    	

     //  	echo($username);
     //  	echo($email);
     //  	echo($pass);
    	// // return view('singup');
    }

}
