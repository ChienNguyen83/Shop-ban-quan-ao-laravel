<?php

namespace App\Http\Controllers;
use App\Models\Mau;
use Illuminate\Http\Request;

class MauController extends Controller
{
     public function getDanhSach() {
    	$Mau = Mau::all();
    	// print_r($Mau);
    	return view('admin.mau.them',['Mau'=>$Mau]);
   //  	echo '<pre>';
			// print_r($Mau);  
    	// $data = DB::select('select * from Mau');
    	// var_dump($data);
    }

    public function postThem(Request $request) {

    	$Mau = new Mau;
    	$Mau->MaMau = $request->Ten;
    	$Mau->save();

    	return redirect('admin/sanpham/themmau');
    	
    }
    public function postXoa(Request $request){
      $MaMau = $request->MaMau;
         $delete = Mau::XoaMau($MaMau);
        return response()->json([
            'data'=>$MaMau,
            'message'=>'Tạo sinh viên thành công'
        ],200);
    }
 }