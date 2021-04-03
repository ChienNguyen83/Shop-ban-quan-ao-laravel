<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

class SanPham extends Model
{
    protected $table='SanPham';
    public $timestamps = false;
    protected $fillable = [
        'TenSP',
        'MaDM',
        'MaNCC',
        'Mota',
        'AnhNen',
        'Anh1',
        'Anh2',
        'Anh3',
       
    ];


    

    protected function getSize(){
    	$size = DB::table('Size')->get();
    	return $size;
    }
    protected function getMau(){
    	$mau = DB::table('Mau')->get();
    	return $mau;
    }
    protected function getMaSP($TenSP){
    	$Masp = DB::table('SanPham')->where('TenSP',$TenSP)->orderBy('Masp', 'desc')->limit(1)->get();
    	return $Masp;
    }
    protected function getTenSP($MaSP){
      $Masp = DB::table('SanPham')->where('MaSP',$MaSP)->orderBy('Masp', 'desc')->limit(1)->get();
      return $Masp;
    }

    protected function upAnh ($file=array()){
    	// echo '<pre>';
    	// print_r($file->getClientOriginalName());
    	// echo '</pre>';
    	// echo '<pre>';
    	// print_r($file->getRealPath());
    	// echo '</pre>';
    	// move_uploaded_file($file['pathName'], 'Anhsp/'.$file['originalName']);
    	$file_name = $file->getClientOriginalName();
    	$randomName = Str::random(4)."_".$file_name;
    	while (file_exists('Anhsp/'.$randomName)) {
    	    $randomName = Str::random(4)."_".$file_name;
    	}
    	$success=$file->move('Anhsp',$randomName);
        return $success;
    }
    public function DanhMuc(){
      // $TenDM = DB::table('DanhMuc')->where('MaDM',$MaDM)->orderBy('TenDM', 'desc')->limit(1)->get();
      return $this->belongsTo('App\Models\DanhMuc','MaDM','MaDM');
    }
        public function ThuongHieu(){
      // $TenDM = DB::table('DanhMuc')->where('MaDM',$MaDM)->orderBy('TenDM', 'desc')->limit(1)->get();
      return $this->belongsTo('App\Models\ThuongHieu','MaNCC','MaNCC');
    }
        public function CTSP(){
      // $TenDM = DB::table('DanhMuc')->where('MaDM',$MaDM)->orderBy('TenDM', 'desc')->limit(1)->get();
      return $this->hasMany('App\Models\ChiTietSanPham','MaSP','MaSP');
    }
        public function Size()
    {
        $a= $this->hasManyThrough(
            'App\Models\Size', 'App\Models\ChiTietSanPham',
            'MaSP', 'MaSize' ,'MaSize'
        );
        return $a->TenSize;
    }
        protected function suasp($MaSP,$TenSP,$MaDM,$MaNCC,$Mota,$AnhNen,$Anh1,$Anh2,$Anh3) {
            $updated = DB::table('SanPham')
            ->where('MaDM', '=', $MaDM)
            ->update([
                'TenSP'       => $TenSP,
                'MaDM'       => $MaDM,
                'MaNCC'       => $MaNCC,
                'Mota'       => $Mota,
                'AnhNen'       => $AnhNen,
                'Anh1'       => $Anh1,
                'Anh2'       => $Anh2,
                'Anh3'       => $Anh3
               
              ]);  

            return $updated;
    }

    protected function getSPbyDM($MaDM){
      $sp = DB::table('SanPham')->where('MaDM',$MaDM)->orderBy('TenSP', 'desc')->get();
      return $sp;
    }

    protected function getGiaSPbyMa($MaSP) {
      $sp = DB::table('ChiTietSanPham')->where('MaSP',$MaSP)->get();
      $arr = array();
      foreach ($sp as $value) {
         array_push($arr,$value->DonGia);
      }
      if (min($arr)==max($arr)) {
        return $gia = min($arr);
      } else {
         $gia = min($arr)."~".max($arr);
         return $gia;
      }
     
    }
    protected function XoaSP($MaSP){
      DB::table('ChiTietSanPham')->where('MaSP',$MaSP)->delete();
      $xoa = DB::table('SanPham')->where('MaSP',$MaSP)->delete();
      return $xoa;
    }


   //  public function themSP($TenSP,$MaDM,$MaNCC,$Mota,$AnhNen,$Anh1,$Anh2,$Anh3){

   //          DB::table('SanPham')->insert(
   // 			 [
   // 			 	'TenSP' => '$TenSP', 
   // 			 	'MaDM' => '$MaDM', 
   // 			 	'MaNCC' => '$MaNCC', 
   			 	
   // 			 	'Mota' => '$Mota', 
   			 	
   // 			 	'AnhNen' => '$AnhNen', 
   // 			 	'Anh1' => '$Anh1', 
   // 			 	'Anh2' => '$Anh2', 
   // 			 	'Anh3' => '$Anh3'
   			 	
   // 			 ]
			// );
   //  }
}
