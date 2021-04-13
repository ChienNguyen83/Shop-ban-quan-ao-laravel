<?php

namespace App\Http\Controllers;
use App\Models\DanhMuc;
use App\Models\SanPham;
use App\Models\ThuongHieu;
use App\Models\ChiTietSanPham;
use App\Models\Mau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChiTietSPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($MaSP)
    {
                $sp = SanPham::getspbyMaSP($MaSP);
        $tongsl = ChiTietSanPham::Tongsl($MaSP);
        $ctsp = ChiTietSanPham::getCTSPbyMa($MaSP);
        $gia = SanPham::getGiaSPbyMa($MaSP);
        $mau = array();
        foreach ($ctsp as $value) {
            array_push($mau, $value->MaMau);
        }
        $mau_uni = array_unique($mau);
        
        $danhmuc = SanPham::getDMbysp($MaSP);
        $madm = $danhmuc[0]['MaDM'];
        $sp_cung_loai = DB::table('SanPham')->where('MaDM',$madm)->paginate(6);
        foreach ($sp_cung_loai as $value) {
            $value->Gia = SanPham::getGiaSPbyMa($value->MaSP);
        }
        
       

      
        return view('ChiTietSP',['sanpham'=>$sp,
                'Tongsl'=>$tongsl,
                'Gia'=>$gia,
                'Mau'=>$mau_uni,
                'SPCungLoai'=>$sp_cung_loai

            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
