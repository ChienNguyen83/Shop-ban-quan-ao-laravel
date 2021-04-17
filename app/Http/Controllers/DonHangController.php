<?php

namespace App\Http\Controllers;
use App\Models\HoaDon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DonHangController extends Controller
{
    public function getDanhSach() {

    	$data['donhang'] = DB::table('HoaDon')->simplePaginate(10);
    	return view('admin.dondathang.danhsach',$data);
  
    }
}
