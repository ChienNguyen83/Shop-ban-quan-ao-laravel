<?php

namespace App\Http\Controllers;
use App\Models\ChiTietSanPham;
use App\Models\Mau;
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
                echo 'Da them thanh cong';
         }
         if ($request->gia1 && $request->soluong1 && $request->size1 && $request->mau1) {
                $Gia = $request->gia1;
                $Soluong = $request->soluong1;
                $Size = $request->size1;
                $Mau = $request->mau1;
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
                echo 'Da them thanh cong';
         }
         if ($request->gia2 && $request->soluong2 && $request->size2 && $request->mau2) {
                $Gia = $request->gia2;
                $Soluong = $request->soluong2;
                $Size = $request->size2;
                $Mau = $request->mau2;
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
                echo 'Da them thanh cong';
         } 
         if ($request->gia3 && $request->soluong3 && $request->size3 && $request->mau3) {
                $Gia = $request->gia3;
                $Soluong = $request->soluong3;
                $Size = $request->size3;
                $Mau = $request->mau3;
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
                echo 'Da them thanh cong';
         } 
         if ($request->gia4 && $request->soluong4 && $request->size4 && $request->mau4) {
                $Gia = $request->gia4;
                $Soluong = $request->soluong4;
                $Size = $request->size4;
                $Mau = $request->mau4;
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
                echo 'Da them thanh cong';
         }                   
        // $ChiTietSanPham = ChiTietSanPham::all();
        // $MaSanPham = getMaSP();
        // return view('admin.danhmuc.sua',['danhmuc'=>$danhmuc]);
    }
}
