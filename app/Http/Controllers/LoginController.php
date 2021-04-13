<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Session;
session_start();
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin(){
    	if (Session::has('admin_name')) {
    		return redirect('admin/danhmuc/danhsach');
    	} else {
    		return view('admin.login');
    	}
    	

          
    }
    public function postLogin(Request $request){
    	$username = $request['email'];
    	$password = $request['pass'];

    	if (Auth::attempt(['name'=>$username,'password'=>$password])) {
    		Session::put('admin_name',$username);
    		return redirect('admin/danhmuc/danhsach');
    	} else {
    		Session::put('error','Tài khoản hoặc mật khẩu chưa đúng');
    		return redirect('admin/login');
    		
    		
    	}

    }
    public function logout(){
    	Session::forget('admin_name');
    	Auth::Logout();
    	return redirect('admin/login');
    }
}
