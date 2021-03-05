<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\ThuongHieu;
use Illuminate\Support\Facades\DB;

class ThuongHieuController extends Controller
{
    public function getDanhSach() {
    	$thuonghieu = ThuongHieu::all();
    	// print_r($DanhMuc);
    	return view('admin.thuonghieu.danhsach',['thuonghieu'=>$thuonghieu]);
   //  	echo '<pre>';
			// print_r($DanhMuc);  
    	// $data = DB::select('select * from DanhMuc');
    	// var_dump($data);
    }
    public function getThem() {
    	return view('admin.thuonghieu.them');
    }
    public function getSua($MaDM) {
    	$danhmuc = DB::select('select * from DanhMuc where MaDM ='.$MaDM);
   //  	  	echo '<pre>';
			// print_r($danhmuc);  
			
    	return view('admin.danhmuc.sua',['danhmuc'=>$danhmuc]);
    }
    public function postSua($id) {
        
    	// return view('admin.danhmuc.sua');
    }
    public function postThem(Request $request) {
    	//Check xem tên nhập ở form có bị lỗi không
    	// $this->validate($request,
    	// 	[
    	// 		'Ten'=>'required|min:3|max:100'
    	// 	],
    	// 	[
    	// 		'Ten.required'=>'Bạn Chưa nhập tên thể loại',
    	// 		'Ten.min'=>'Tên thể loại phải có đội dài từ 3 đến 100 ký tự',
    	// 		'Ten.max'=>'Tên thể loại phải có đội dài từ 3 đến 100 ký tự',
    	// 	]
    	// echo $request->Ten;
    	$thuonghieu = new ThuongHieu;
    	$thuonghieu->TenNCC = $request->TenTH;
    	$thuonghieu->save();
    	return redirect('admin/thuonghieu/danhsach');
    	
    }
}
