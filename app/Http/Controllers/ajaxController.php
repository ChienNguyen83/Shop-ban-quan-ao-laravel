<?php

namespace App\Http\Controllers;
use App\Models\ChiTietSanPham;
use App\Models\SanPham;
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



    public function postSua(Request $request,$MaSP,$MaMau,$MaSize){
    	  $SoLuong = $request->soluong;
    	  $DonGia = $request->gia;
    	  if ($SoLuong || $DonGia ) {
    	  	$sua = ChiTietSanPham::suactsp($MaSP,$MaSize,$MaMau,$SoLuong,$DonGia);
    	  }
          
            
    }
}
