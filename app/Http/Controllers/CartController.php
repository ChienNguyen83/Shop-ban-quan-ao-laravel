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
    	$sp[0]->Gia = SanPham::getGiaSPbyMa1($MaSP);
    	// dd($sp[0]);
    	if ($sp != null) {
    		// if (Session('Cart') != null) {
    			$oldCart = Session('Cart') ? Session('Cart') : null ;
    			$newCart = new cart($oldCart);
    			$newCart->AddCart($sp[0],$MaSP);
    			$req->session()->put('Cart',$newCart);
    			 
    		// }
    	}
    	// dd(session()->get('Cart'));
         return view('layout.header_cart'); 
     
    }

        public function DeleteItem(Request $req,$MaSP)
    {
    	$sp = SanPham::getspbyMaSP($MaSP);
    	
    	$sp[0]->Gia = 10000;
    	
    			$oldCart = Session('Cart') ? Session('Cart') : null ;
    			$newCart = new cart($oldCart);
    			$newCart->DeleteItemCart($MaSP);

    			if (count($newCart->products)>0) {
    				$req->session()->put('Cart',$newCart);
    			}else {
    				$req->session()->forget('Cart');
    			}
    			
    			 
    	
         return view('layout.header_cart'); 
     
    }
    public function cartList(){
    	return view('cart');
    }

        public function DeleteListItem(Request $req,$MaSP)
    {
    	$sp = SanPham::getspbyMaSP($MaSP);
    	
    	$sp[0]->Gia = 10000;
    	
    			$oldCart = Session('Cart') ? Session('Cart') : null ;
    			$newCart = new cart($oldCart);
    			$newCart->DeleteItemCart($MaSP);

    			if (count($newCart->products)>0) {
    				$req->session()->put('Cart',$newCart);
    			}else {
    				$req->session()->forget('Cart');
    			}
    			
    			 
    	
         return view('layout.listcart'); 
     
    }

    public function updateCart(Request $req){

    	$data = $req->data;
    	foreach ($data as $item) {

    		$oldCart = Session('Cart') ? Session('Cart') : null ;
    			$newCart = new cart($oldCart);
    			$newCart->UpdateItemCart($item['key'],$item['value']);
    			$req->session()->put('Cart',$newCart);
    	}

    	// return view('cart'); 
    	// return view('layout.listcart'); 
     

    }

    






    


}
