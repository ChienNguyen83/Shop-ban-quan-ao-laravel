<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\HoaDon;
use App\Models\ChiTietHoaDon;
use App\Models\NguoiNhan;
use App\Models\User;
class CheckoutController extends Controller
{
    public function getcheckout(){

    	if (Session::has('Cart')) {
    		
    	
    	if (Session::has('Cus_name')) {
    		$tenkh = Session::get("Cus_name");
    	}

    	$kh = DB::table('users')->select('id')->where('name',$tenkh)->limit(1)->get();
    	$makh = $kh[0]->id;
    	return view('checkout',[
         'makh'=>$makh,
         'tenkh'=>$tenkh,

    	]);

      } else {
      	 echo '<style>
body, html {
  height: 100%;
  margin: 0;
 
}

.bgimg {
  background-image: url("public/fontend_lib/images/slide2.jpg");
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
  opacity:0.8;
  z-index:1;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 15%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
a {
	color:white;

}
hr {
  margin: auto;
  width: 40%;
}
</style>
<body>

<div class="bgimg">
  <div class="topleft">
    <p>Logo</p>
  </div>
  <div class="middle">
    <h1>Giỏ hàng trống</h1>
   
    <a href="trangchu">Tiếp tục mua sắm</a>
  </div>
  <div class="bottomleft">
    <p>Some text</p>
  </div>
</div>

</body>';
      	 // return redirect('trangchu');
      }
    }



    public function postcheckout(Request $request){
         

          if (Session::has('Cart')) {
          	$t=time();
             $time = date("Y-m-d",$t);
             $makh = $request->makh;
    		 $tongtien = Session::get('Cart')->totalPrice;
    		// dd($tongtien);

    		 $hoadon = new HoaDon;
    		 $hoadon->MaKH = $makh;
    		 $hoadon->MaNV = 1;
    		 $hoadon->NgayDat = $time;
    		 $hoadon->NgayGiao = $t;
    		 $hoadon->TinhTrang = 0;
    		 $hoadon->TongTien = $tongtien;
    		 $hoadon->MaNVC = 1;
    		 $hoadon->save();
    		 


    		 $mahd = DB::table('HoaDon')->select('MaHD')->where('NgayGiao',$t)->get();
    		 
    		 $nguoinhan = new NguoiNhan;
    		 $nguoinhan->MaHD = $mahd[0]->MaHD;
    		 $nguoinhan->TenNN = $request->firstname;
    		 $nguoinhan->DiaChiNN = $request->state;
    		 $nguoinhan->SDTNN = $request->phone;
    		 $nguoinhan->save();

    		 $sp = Session::get('Cart')->products;
    		 foreach ($sp as $item) {

    		 	$cthd = new ChiTietHoaDon;
    		 	$cthd->MaHD =  $mahd[0]->MaHD;
    		 	$cthd->MaSP =  $item['productInfo']->MaSP;
    		 	$cthd->SoLuong =  $item['quanty'];
    		 	$cthd->DonGia =  $item['productInfo']->Gia;
    		 	$cthd->ThanhTien =  $item['productInfo']->Gia;
    		 	$cthd->MaSize =  'M';
    		 	$cthd->MaMau =  "Đen";
    		 	$cthd->save();
    		 	
    		 	Session::forget('Cart');






                 		      	 echo '<style>
body, html {
  height: 100%;
  margin: 0;
 
}

.bgimg {
  background-image: url("public/fontend_lib/images/slide2.jpg");
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
  opacity:0.8;
  z-index:1;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 15%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
a {
	color:white;

}
hr {
  margin: auto;
  width: 40%;
}
</style>
<body>

<div class="bgimg">
  <div class="topleft">
    <p>Logo</p>
  </div>
  <div class="middle">
    <h1>Đặt hàng thành công</h1>
   
    <a href="trangchu">Tiếp tục mua sắm</a>
  </div>
  <div class="bottomleft">
    <p>Some text</p>
  </div>
</div>

</body>';







    		 	
    		 }
            


    	} else {
    		      	 echo '<style>
body, html {
  height: 100%;
  margin: 0;
 
}

.bgimg {
  background-image: url("public/fontend_lib/images/slide2.jpg");
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
  opacity:0.8;
  z-index:1;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 15%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
a {
	color:white;

}
hr {
  margin: auto;
  width: 40%;
}
</style>
<body>

<div class="bgimg">
  <div class="topleft">
    <p>Logo</p>
  </div>
  <div class="middle">
    <h1>Đặt hàng thành công</h1>
   
    <a href="trangchu">Tiếp tục mua sắm</a>
  </div>
  <div class="bottomleft">
    <p>Some text</p>
  </div>
</div>

</body>';
    	}

    }
}
