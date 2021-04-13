<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\DanhMuc;
use App\Models\SanPham;
use App\Models\ThuongHieu;
use App\Models\ChiTietSanPham;
use App\Models\Mau;
use App\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class CartController extends Controller
{
    public function AddCart(Request $req,$MaSP)
    {
    	$sp = SanPham::getspbyMaSP($MaSP);
    	// $sp[0]->Gia = SanPham::getGiaSPbyMa($sp[0]->MaSP);
    	$sp[0]->Gia = 10000;
    	// print_r($sp[0]->Gia);
    	if ($sp != null) {
    		// if (Session('Cart') != null) {
    			$oldCart = Session('Cart') ? Session('Cart') : null ;
    			$newCart = new cart($oldCart);
    			$newCart->AddCart($sp,$MaSP);
    			$req->session()->put('Cart',$newCart);
    			 
    		// }
    	}
         return view('layout.header_cart',['newCart'=>$newCart]); 
     
    }


}
