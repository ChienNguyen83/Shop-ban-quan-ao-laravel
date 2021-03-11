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
   //  public function getThem() {
   //  	return view('admin.mau.them');
   //  }
   //  public function getSua($MaDM) {
   //      // $Mau = Mau::getTenDM($MaDM);
   //      // $Mau = Mau::all();
   //      // echo $Mau;
   //  	$Mau = DB::select('select * from Mau where MaDM ='.$MaDM);
   // //  	  	echo '<pre>';
			// // print_r($Mau);  
			
   //  	return view('admin.Mau.sua',['Mau'=>$Mau]);
   //  }
   //  public function postSua(Request $request, $MaDM) {
   //  //     $a = $request->Ten;
   //  //     echo $a;
   //      $Mau = Mau::SuaDM($request->Ten,$MaDM);
        
   //          //      echo '<pre>';
   //          // print_r($Mau[0]->TenDM); 
   //      // $Mau->TenDM = $request->Ten;
   //      // $Mau->save();
   //      return redirect('admin/Mau/danhsach');
   //  }
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
    	$Mau = new Mau;

    	$Mau->MaMau = $request->Ten;
    	$Mau->save();
            //  echo '<pre>';
            // print_r($Mau->TenDM); 

    	return redirect('admin/sanpham/themmau');
    	
    }
    public function getXoa($MaMau){
         $delete = Mau::XoaMau($MaMau);
         return redirect('admin/sanpham/themmau');
    }
 }