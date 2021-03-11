<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMuc;
use Illuminate\Support\Facades\DB;

class DanhMucController extends Controller
{
    public function getDanhSach() {
    	$DanhMuc = DanhMuc::all();
    	// print_r($DanhMuc);
    	return view('admin.danhmuc.danhsach',['DanhMuc'=>$DanhMuc]);
   //  	echo '<pre>';
			// print_r($DanhMuc);  
    	// $data = DB::select('select * from DanhMuc');
    	// var_dump($data);
    }
    public function getThem() {
    	return view('admin.danhmuc.them');
    }
    public function getSua($MaDM) {
        // $DanhMuc = DanhMuc::getTenDM($MaDM);
        // $DanhMuc = DanhMuc::all();
        // echo $DanhMuc;
    	$danhmuc = DB::select('select * from DanhMuc where MaDM ='.$MaDM);
   //  	  	echo '<pre>';
			// print_r($DanhMuc);  
			
    	return view('admin.danhmuc.sua',['danhmuc'=>$danhmuc]);
    }
    public function postSua(Request $request, $MaDM) {
    //     $a = $request->Ten;
    //     echo $a;
        $danhmuc = DanhMuc::SuaDM($request->Ten,$MaDM);
        
            //      echo '<pre>';
            // print_r($danhmuc[0]->TenDM); 
        // $danhmuc->TenDM = $request->Ten;
        // $danhmuc->save();
        return redirect('admin/danhmuc/danhsach');
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
    	$danhmuc = new DanhMuc;

    	$danhmuc->TenDM = $request->Ten;
    	$danhmuc->save();
             echo '<pre>';
            print_r($danhmuc->TenDM); 

    	return redirect('admin/danhmuc/danhsach');
    	
    }
    public function getXoa($MaDM){
         $delete = $danhmuc = DanhMuc::XoaDM($MaDM);
         return redirect('admin/danhmuc/danhsach');
    }
}
