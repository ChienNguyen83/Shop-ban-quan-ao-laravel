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
    	} else {
    		Session::put('errorcus','Tài khoản hoặc mật khẩu chưa đúng');
    		return redirect('/login');
    		
    		
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
      	$email = $request->email;
      	$pass = bcrypt($request->cus_pass);
      	//luu user vao csdl
      	$user = new User;
      	$user->name = $username;
      	$user->email = $email;
      	$user->password = $pass;
      	$user->save();
       // dang nhap

      		if (Auth::attempt(['name'=>$username,'password'=>$pass])) {
    		Session::put('Cus_name',$username);
    		return redirect('trangchu');
    	} else {
    		Session::put('errorcus','Tài khoản hoặc mật khẩu chưa đúng');
    		return redirect('/login');
    		
    		
    	}

     //  	echo($username);
     //  	echo($email);
     //  	echo($pass);
    	// // return view('singup');
    }

}
