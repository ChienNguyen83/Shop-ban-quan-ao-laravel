<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
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
        // $sanpham = $SanPham->paginate(10);
        // dd($sanpham);
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
            $DanhMucOfSP = SanPham::getDMbysp($MaSP);
            $AllDanhMuc = DanhMuc::all();
            
            //Xu Ly danh sach danh muc
            $DMKhac = array();
            foreach ($AllDanhMuc as $value) {
                array_push($DMKhac, $value->MaDM);
            }
             
            if (in_array($DanhMucOfSP[0]['MaDM'], $DMKhac)) {
                        $DMKhac=  array_diff($DMKhac,array($DanhMucOfSP[0]['MaDM']));
                   }
            
            $DanhMucKhac = array();
            foreach ($DMKhac as $value) {
                $TenDM = DanhMuc::getTenDM($value);
           
                $al = array("MaDM"=>$value,"TenDM"=>$TenDM[0]->TenDM);
                array_push($DanhMucKhac,$al );
            }
            
            //Xu ly danh sach thuong hieu
            $AllThuongHieu = ThuongHieu::all();
            $ThuongHieuofSP = SanPham::getTHbyMasp($MaSP);
            $THKhac = array();
            foreach ($AllThuongHieu as $value) {
                array_push($THKhac, $value->MaNCC);
            }
             
            if (in_array($ThuongHieuofSP[0]['MaTH'], $THKhac)) {
                        $THKhac=  array_diff($THKhac,array($ThuongHieuofSP[0]['MaTH']));
                   }
            
            $ThuongHieuKhac = array();
            foreach ($THKhac as $value) {
                $TenTH = ThuongHieu::getTenTH($value);
           
                $arrth = array("MaTH"=>$value,"TenTH"=>$TenTH[0]->TenNCC);
                array_push($ThuongHieuKhac,$arrth );
            }

           //Xu ly mau
            $Mau = Mau::all();
        
    	return view('admin.sanpham.sua',['SanPham'=>$SanPham,
        'SanPham1'=>$SanPham1,  
        'ctsp'=>$ctsp,
        'DanhMucOfSP'=>$DanhMucOfSP,
        'DanhMucKhac'=>$DanhMucKhac,
        'ThuongHieuofSP'=>$ThuongHieuofSP,
        'ThuongHieuKhac'=>$ThuongHieuKhac,
        'Mau'=>$Mau,


        
    ]);
    }
    public function postSua(Request $request,$MaSP) {
        if ($request->madm) {
            $MaDM = (int)$request->madm;
            $updated = DB::table('SanPham')
            ->where('MaSP', '=', $MaSP)
            ->update(['MaDM'=> $MaDM]);  
            echo 'thanh cong1';
        }
        if ($request->tensp) {
            $TenSP = $request->tensp;
            $updated = DB::table('SanPham')
            ->where('MaSP', '=', $MaSP)
            ->update(['TenSP'=> $TenSP]);  
            echo 'thanh cong2';
        }
        if ($request->mancc) {
            $MaNCC = (int)$request->mancc;
            $updated = DB::table('SanPham')
            ->where('MaSP', '=', $MaSP)
            ->update(['MaNCC'=> $MaNCC]);  
            echo 'thanh cong3';
        }
        if ($request->mota) {
            $Mota = $request->mota;
            $updated = DB::table('SanPham')
            ->where('MaSP', '=', $MaSP)
            ->update(['Mota'=> $Mota]);  
            echo 'thanh cong4';
        }
        if ($request->file('anhnen')) {
            $AnhNen = SanPham::upAnh($request->file('anhnen'));
            $updated = DB::table('SanPham')
            ->where('MaSP', '=', $MaSP)
            ->update(['AnhNen'=> $AnhNen]);  
            echo 'thanh cong5';
        }
                if ($request->file('anh1')) {
             $Anh1= SanPham::upAnh($request->file('anh1'));
            $updated = DB::table('SanPham')
            ->where('MaSP', '=', $MaSP)
            ->update(['Anh1'=> $Anh1]);  
            echo 'thanh cong6';
        }
                if ($request->file('anh2')) {
            $Anh2= SanPham::upAnh($request->file('anh2'));
            $updated = DB::table('SanPham')
            ->where('MaSP', '=', $MaSP)
            ->update(['Anh2'=> $Anh2]);  
            echo 'thanh cong7';
        }
                if ($request->file('anh3')) {
            $Anh3= SanPham::upAnh($request->file('anh3'));
            $updated = DB::table('SanPham')
            ->where('MaSP', '=', $MaSP)
            ->update(['Anh3'=> $Anh3]);  
            echo 'thanh cong8';
        }
        return redirect('admin/sanpham/danhsach');
        
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
        // print_r($request->file('anhnen'));
        // $An= SanPham::upAnh($request->file('anhnen'));
        // $An= SanPham::upAnh($request->file('anh1'));
        // $An= SanPham::upAnh($request->file('anh2'));
        // $An= SanPham::upAnh($request->file('anh3'));
        // print_r($An);
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
            $url = 'admin/sanpham/themspdaco/'.$MaSanPham[0]->MaSP;
            return redirect($url);

            

        }

    	
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
    public function back(){
        return view('admin.sanpham.back');
    }



}
