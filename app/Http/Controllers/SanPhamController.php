<?php

namespace App\Http\Controllers;
use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanPhamController extends Controller
{
     public function getDanhSach() {
    	//$DanhMuc = DanhMuc::all();
    	// print_r($DanhMuc);
    	//return view('admin.danhmuc.danhsach',['DanhMuc'=>$DanhMuc]);
   //  	echo '<pre>';
			// print_r($DanhMuc);  
    	// $data = DB::select('select * from DanhMuc');
    	// var_dump($data);
    }
    public function getThem() {
    	$DanhMuc = DanhMuc::all();
   //  	 	echo '<pre>';
			// print_r($DanhMuc);  
    	return view('admin.sanpham.them',['DanhMuc'=>$DanhMuc]);
    	// return view('admin.sanpham.them');
    }
    public function getSua($MaDM) {
    	//$danhmuc = DB::select('select * from DanhMuc where MaDM ='.$MaDM);
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
    	// $danhmuc = new DanhMuc;
    	// $danhmuc->TenDM = $request->Ten;
    	// $danhmuc->save();
    	// return redirect('admin/danhmuc/danhsach');
    	
    }
}
