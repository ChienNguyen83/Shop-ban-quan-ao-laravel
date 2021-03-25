<?php

namespace App\Http\Controllers;
use App\Models\ChiTietSanPham;
use App\Models\Mau;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThemChiTietSPController extends Controller
{
   
    public function themChiTietSP(Request $request) {
        
         
         if ($request->gia && $request->soluong && $request->size && $request->mau) {
                $Gia = $request->gia;
                $Soluong = $request->soluong;
                $Size = $request->size;
                $Mau = $request->mau;
                $MaSP = $request->MaSP;

                foreach ($Size as $value) {
                    $ctsp = new ChiTietSanPham;
                    $ctsp->MaSP = $MaSP;
                    $ctsp->MaSize = $value;
                    $ctsp->MaMau = $Mau;
                    $ctsp->Soluong = $Soluong;
                    $ctsp->DonGia = $Gia;
                    $ctsp->save();
                }
                return view('admin.sanpham.back');
         }
        
        // $ChiTietSanPham = ChiTietSanPham::all();
        // $MaSanPham = getMaSP();
        // return view('admin.danhmuc.sua',['danhmuc'=>$danhmuc]);
    }
    public function getthemChiTietSP($MaSP) {
        // $ma = $MaSP;
        // echo $ma;

           $MaSanPham = ChiTietSanPham::getCTSPbyMaSP($MaSP);
   



            $Mau = SanPham::getMau();
            $Mau1 = ChiTietSanPham::getCTSPbyMa($MaSP);
            $Mau2 = SanPham::getMau();
            $Mau3 = SanPham::getMau();
            $Mau4 = SanPham::getMau();
           //  $arr = array();

           //  foreach ($Mau as $value) {
           //             array_push($arr,$value->MaMau) ;
           //         }
           //  $uniarr = array_unique($arr);

           // foreach ($Mau1 as $value) {
           //         if (in_array($value->MaMau, $uniarr)) {
           //              $uniarr=  array_diff($uniarr, array($value->MaMau));
           //         }
           //     }    


                // var_dump($uniarr);  
            return view('admin.chitietsanpham.themspdaco',[
                'MaSanPham'=>$MaSanPham,
                  // 'arr'=>$arr,
           
                  // 'uniarr'=>$uniarr,
                  'Mau'=>$Mau,
                  'Mau2'=>$Mau2,
                  'Mau3'=>$Mau3,
                  'Mau4'=>$Mau4
              ]);
            
    }
    public function getsuaChiTietSP($MaSP,$MaSize,$MaMau){

        

        $ctsp = ChiTietSanPham::getCTSP($MaSP,$MaSize,$MaMau);
    
        
        return view ('admin.chitietsanpham.sua',['ctsp'=>$ctsp,'arr'=>$arr,'size1'=>$size1]);
    }
    public function postsuaChiTietSP (Request $request,$MaSP,$MaSize,$MaMau) {
        $SoLuong = $request->soluong;
        $DonGia = $request->gia;
        $sua = ChiTietSanPham::suactsp($MaSP,$MaSize,$MaMau,$SoLuong,$DonGia);
        echo 'Da cap nhat';
    }
}
