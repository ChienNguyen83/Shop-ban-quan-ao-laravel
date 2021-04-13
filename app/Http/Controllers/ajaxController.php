<?php

namespace App\Http\Controllers;
use App\Models\ChiTietSanPham;
use App\Models\DanhMuc;
use App\Models\SanPham;
use App\Models\ThuongHieu;
use Illuminate\Http\Request;

class ajaxController extends Controller
{
    public function getSize($MaSP,$MaMau){

            
        $size = SanPham::getSize();
                    $arr = array();

            foreach ($size as $value) {
                       array_push($arr,$value->MaSize) ;
                   }
  
        $size1 = ChiTietSanPham::getSizebyMau($MaSP,$MaMau);
        
           foreach ($size1 as $value) {
                   if (in_array($value->MaSize, $arr)) {
                        $arr=  array_diff($arr, array($value->MaSize));
                   }
        
               }

       foreach ($arr as $value) {
       	      echo '<div class=" custom-checkbox custom-control col-1"><input type="checkbox" class="custom-control-input m-2" id="size'.$value.'" name="size[]" value="'.$value.'"  >
              <label class="custom-control-label" for="size'.$value.'"><h5>'.$value.'</h5></label></div>';
       }
            
    }



    public function postSua(Request $request){
        

              	  $SoLuong = $request->SoLuong;
    	  $DonGia = $request->DonGia;
    	  $MaSP = $request->MaSP;
    	  $MaMau = $request->MaMau;
    	  $MaSize = $request->MaSize;
    	  if ($SoLuong || $DonGia ) {
    	  	$sua = ChiTietSanPham::suactsp($MaSP,$MaSize,$MaMau,$SoLuong,$DonGia);
    	  }


    	        $student=$request->all();
        return response()->json([
            'data'=>$student,
            'message'=>'Tạo sinh viên thành công'
        ],200); // 200 là mã lỗ
    	// var_dump($request->data);

    	
          
            
    }




      public function getDanhMuc(){
             $danhmuc = DanhMuc::all();
             foreach ($danhmuc as $value) {
                echo '<li>
                    <button class="danhmuc" data-id="'.$value->MaDM.'" style="border:none; padding:0;font: inherit;font-size: 13px;
                 " >

                      '.$value->TenDM.'
                    </button>
                  </li>';
             }
      }
            public function getThuongHieu(){
             $thuonghieu = ThuongHieu::all();
             foreach ($thuonghieu as $value) {
                echo '<li>
                    <button class="thuonghieu" data-id="'.$value->MaNCC.'" style="border:none; padding:0;font: inherit;font-size: 13px;
                 " >

                      '.$value->TenNCC.'
                    </button>
                  </li>';
             }
      }

      public function getSPbyDanhMuc($MaDM){
           $sp = SanPham::getSPbyDM($MaDM);
           $gia = array();
           
           // print_r($sp);
           foreach ($sp as $value) {
        
              $ctsp = SanPham::getGiaSPbyMa($value->MaSP);

                array_push($gia,$ctsp);
            // echo $ctsp;
            // echo '<br>';

           }
           return response()->json([
            'data'=>$sp,
            'gia'=>$gia,
            'message'=>'Tạo sinh viên thành công'
        ],200);
      

    }
   public function getSPbyThuongHieu($MaNCC){
           $th = SanPham::getSPbyTH($MaNCC);
           $gia = array();
           
           // print_r($sp);
           foreach ($th as $value) {
        
              $ctsp = SanPham::getGiaSPbyMa($value->MaSP);

                array_push($gia,$ctsp);

           }
           return response()->json([
            'data'=>$th,
            'gia'=>$gia,
            'message'=>'Tạo sinh viên thành công'
        ],200);
      

    }
  public function getTenSP(){
    $sp = SanPham::all();
    $arrtensp = array();
    foreach ($sp as $value) {
      array_push($arrtensp, $value->TenSP);
    }
    
    return $arrtensp;
  }

  public function getAllSize($MaSP,$MaMau){
        $size = ChiTietSanPham::getSizebyMau($MaSP,$MaMau);
           return response()->json([
            'data'=>$size,
        ],200);
  }
}

