<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\ThuongHieu;
use App\Models\SanPham;
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
    public function getSua($MaNCC) {
    	$thuonghieu = ThuongHieu::getTH($MaNCC);
			
    	return view('admin.thuonghieu.sua',['thuonghieu'=>$thuonghieu]);
    }
    public function postSua(Request $request,$MaNCC) {

        $update = ThuongHieu::SuaTH($request->Ten,$MaNCC);
    	return redirect('admin/thuonghieu/danhsach');
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
    public function postXoa(Request $request) {
         $MaNCC = $request->MaNCC;
        $xoa = ThuongHieu::XoaNCC($MaNCC);

        return response()->json([
            'data'=>$MaNCC,
            'message'=>'Tạo sinh viên thành công'
        ],200);

    }
}
