<?php

namespace App\Http\Controllers;
use App\Models\DanhMuc;
use App\Models\SanPham;
use App\Models\ThuongHieu;
use App\Models\ChiTietSanPham;
use App\Models\Mau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SanPhamController extends Controller
{
     public function getDanhSach() {
    	$SanPham = SanPham::all();
    	// print_r($DanhMuc);
    	return view('admin.sanpham.danhsach',['SanPham'=>$SanPham]);
   //  	echo '<pre>';
			// print_r($DanhMuc);  
    	// $data = DB::select('select * from DanhMuc');
    	// var_dump($data);
    }
    public function getThem() {
    	$DanhMuc = DanhMuc::all();

        $thuonghieu = ThuongHieu::all();

   //  	 	echo '<pre>';
			// print_r($DanhMuc);  
    	return view('admin.sanpham.them',['DanhMuc'=>$DanhMuc,
        'thuonghieu'=>$thuonghieu,


    ]);
    	// return view('admin.sanpham.them');
    }
    public function getSua($MaSP) {
    	//$danhmuc = DB::select('select * from DanhMuc where MaDM ='.$MaDM);
   //  	  	echo '<pre>';
			// print_r($danhmuc);  
			// $SP= SanPham::all();
            $SanPham = SanPham::getTenSP($MaSP);
            $SanPham1 = SanPham::getTenSP($MaSP);
            $ctsp = ChiTietSanPham::getCTSPbyMa($MaSP);
            $DanhMuc = DanhMuc::all();
            $thuonghieu = ThuongHieu::all();
            // $Size = Size::all();
            $Mau = Mau::all();
        //     echo '<pre>';
        // var_dump($Mau);
    	return view('admin.sanpham.sua',['SanPham'=>$SanPham,
        'SanPham1'=>$SanPham1,  
        'ctsp'=>$ctsp,
        'DanhMuc'=>$DanhMuc,
        'thuonghieu'=>$thuonghieu,
        'Mau'=>$Mau,


        
    ]);
    }
    public function postSua(Request $request,$MaSP) {
        
                if (
            $request->file('anhnen') && $request->tensp && $request->mota && $request->file('anh1') && $request->file('anh3') && $request->file('anh2') 
        ) {

            $MaDM = (int)$request->madm;
            $MaNCC = (int)$request->mancc;
            $TenSP = $request->tensp;
            $Mota = $request->mota;
            $AnhNen = SanPham::upAnh($request->file('anhnen'));
            $Anh1= SanPham::upAnh($request->file('anh1'));
            $Anh2= SanPham::upAnh($request->file('anh2'));
            $Anh3= SanPham::upAnh($request->file('anh3'));
            $suasp = SanPham::suasp($MaSP,$TenSP,$MaDM,$MaNCC,$Mota,$AnhNen,$Anh1,$Anh2,$Anh3);
            echo 'cap nhat thanh cong';
        }
        $ma = $request->masp;
        // echo ($ma[0]);
        // $xoa = ChiTietSanPham::Xoa($ma[0]);
        foreach ($ma as $value) {

            //     $Gia = $request->gia;
            //     $Soluong = $request->soluong;
            //     $Size = $request->size;
            //     $Mau = $request->mau;
            //     $MaSP = $request->MaSP;
            // $ctsp = ChiTietSanPham::getCTSPbyMa($value);
            // foreach ($ctsp as $sp) {
            //      if ($sp->MaSize == $Size && $sp->MaMau == $Mau && $sp->SoLuong == $Soluong && $sp->DonGia == $Gia ) {
            //              continue;
            //          } else {
            //                 // $xoa = ChiTietSanPham::Xoa($value);
            //                 $capnhat = ChiTietSanPham::themctsp($value,$Size,$Mau,$Soluong,$Gia);
            //                 echo 'Cap nhat thanh cong';
            //          }
            // }
          
            // var_dump($ctsp);

        }
        foreach ($ma as $value) {
                $Gia = $request->gia;
                $Soluong = $request->soluong;
                $Size = $request->size;
                $Mau = $request->mau;
                $MaSP = $request->MaSP;
            $ctsp = ChiTietSanPham::getCTSPbyMa($value);
            foreach ($ctsp as $sp) {
                 if ($sp->MaSize == $Size && $sp->MaMau == $Mau && $sp->SoLuong == $Soluong && $sp->DonGia == $Gia ) {
                         continue;
                     } else {
                            // $xoa = ChiTietSanPham::Xoa($value);
                            $capnhat = ChiTietSanPham::themctsp($value,$Size,$Mau,$Soluong,$Gia);
                            echo 'Cap nhat thanh cong';
                     }
            }

        }
    	
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
    	// echo $request->madm;
        // $MaDM = $request->madm;
        // $TenSP = $request->tensp;
        // $Gia = $request->gia;
        // $Soluong = $request->soluong;
        // $Mota = $request->mota;
        // $Size = $request->size;
        // $Mau = $request->mau;

        // print_r($request->size) ;
        // echo '<br>';
        // print_r($request->size1) ;
        // print_r($request->mau) ;
        // $MaDM = (int)$request->madm;

        // echo gettype($MaDM);
        if (
            $request->file('anhnen') && $request->tensp && $request->mota && $request->file('anh1') && $request->file('anh3') && $request->file('anh2') 
        ) {

            $MaDM = (int)$request->madm;
            $MaNCC = (int)$request->mancc;
            $TenSP = $request->tensp;
            $Mota = $request->mota;
            $AnhNen = SanPham::upAnh($request->file('anhnen'));
            $Anh1= SanPham::upAnh($request->file('anh1'));
            $Anh2= SanPham::upAnh($request->file('anh2'));
            $Anh3= SanPham::upAnh($request->file('anh3'));


            $themsp = new SanPham; 
            $themsp->TenSP = $TenSP;
            $themsp->MaDM = $MaDM;
            $themsp->MaNCC = $MaNCC;
            $themsp->Mota = $Mota;
            $themsp->AnhNen = $AnhNen;
            $themsp->Anh1 = $Anh1;
            $themsp->Anh2 = $Anh2;
            $themsp->Anh3 = $Anh3;
            $themsp->save();
            
            // $this->themChiTiet();
            $MaSanPham = SanPham::getMaSP($TenSP);

            $Size = SanPham::getSize();
            $Size1 = SanPham::getSize();
            $Size2 = SanPham::getSize();
            $Size3 = SanPham::getSize();
            $Size4 = SanPham::getSize();

            $Mau = SanPham::getMau();
            $Mau1 = SanPham::getMau();
            $Mau2 = SanPham::getMau();
            $Mau3 = SanPham::getMau();
            $Mau4 = SanPham::getMau();
            // echo $MaSanPham;
            return view('admin.chitietsanpham.them',[
                'MaSanPham'=>$MaSanPham,
                  'Size'=>$Size,
                  'Size1'=>$Size1,
                  'Size2'=>$Size2,
                  'Size3'=>$Size3,
                  'Size4'=>$Size4,
                  'Mau'=>$Mau,
                  'Mau1'=>$Mau1,
                  'Mau2'=>$Mau2,
                  'Mau3'=>$Mau3,
                  'Mau4'=>$Mau4
              ]);
            
            // $themctsp = new ChiTietSanPham;
            // $themctsp ->MaSP= $themsp->MaSP;
        // 'MaSP',
        // 'MaSize',
        // 'MaMau',
        // 'SoLuong',
        // 'DonGia',
           

        }
        // $Size1 = $request->size1;
        // $Mau1 = $request->mau1;
        // foreach ($Size1 as $size1) {
        //     echo $size1;
        //     echo $Mau1;
        // }
        //         $Size = $request->size;
        // $Mau = $request->mau;
        // foreach ($Size as $size) {
        //     echo $size;
        //     echo $Mau;
        // }
        

        // $Anh1= SanPham::upAnh($request->file('anh1'));
        // $Anh2= SanPham::upAnh($request->file('anh2'));
        // $Anh3= SanPham::upAnh($request->file('anh3'));
        
        // themSP($TenSP,$MaDM,$MaNCC,$Soluong,$Mota,$DonGia,$AnhNen,$Anh1,$Anh2,$Anh3);
    	// $danhmuc = new DanhMuc;
    	// $danhmuc->TenDM = $request->Ten;
    	// $danhmuc->save();
    	// return redirect('admin/danhmuc/danhsach');
    	
    }

    public function postXoa(Request $request){
        $MaSP = $request->MaSP;
        $xoa = SanPham::XoaSP($MaSP);
        $sp=$request->MaSP;
        return response()->json([
            'data'=>$sp,
            'message'=>'Tạo sinh viên thành công'
        ],200);
    }



}
