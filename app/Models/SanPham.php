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
    	while (file_exists('public\admin_backend\Anhsp'.$randomName)) {
    	    $randomName = Str::random(4)."_".$file_name;
    	}
    	$success=$file->move('public\admin_backend\Anhsp',$randomName);
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
      $sp = DB::table('SanPham')->where('MaDM',$MaDM)->orderBy('TenSP', 'desc')->paginate(16);
      return $sp;
    }
        protected function getSPbyTH($MaNCC){
      $sp = DB::table('SanPham')->where('MaNCC',$MaNCC)->orderBy('TenSP', 'desc')->get();
      return $sp;
    }

    protected function getGiaSPbyMa($MaSP) {
      $sp = DB::table('ChiTietSanPham')->where('MaSP',$MaSP)->get();

      $arr = array();
      foreach ($sp as $value) {
         array_push($arr,$value->DonGia);
      }
      // print_r($arr[0]);
      // echo(min($arr));
          $max = null;
          $position = null;
 
        for ($i = 0; $i < count($arr); $i++)
        {
            if ($max == null){
                $max = $arr[$i];
              
            }
            else {
                if ($arr[$i] > $max){
                    $max = $arr[$i];
                  
                }
            }
        }

          $min = null;
          $position = null;
 
        for ($i = 0; $i < count($arr); $i++)
        {
            if ($min == null){
                $min = $arr[$i];
              
            }
            else {
                if ($arr[$i] < $min){
                    $min = $arr[$i];
                  
                }
            }
        }

      if ($min==$max) {
        return $gia = $min;
      } else {
         $gia = $min."~".$max; 
         return $gia;
      }
     
    }




        protected function getGiaSPbyMa1($MaSP) {
      $sp = DB::table('ChiTietSanPham')->where('MaSP',$MaSP)->get();
      $arr = array();
      foreach ($sp as $value) {
         array_push($arr,$value->DonGia);
      }
      


          $min = null;
          $position = null;
 
        for ($i = 0; $i < count($arr); $i++)
        {
            if ($min == null){
                $min = $arr[$i];
              
            }
            else {
                if ($arr[$i] < $min){
                    $min = $arr[$i];
                  
                }
            }
        }

        return $gia = $min;
   
     
    }
    protected function XoaSP($MaSP){
      DB::table('ChiTietSanPham')->where('MaSP',$MaSP)->delete();
      $xoa = DB::table('SanPham')->where('MaSP',$MaSP)->delete();
      return $xoa;
    }
    protected function getDMbysp($MaSP){
      $sp = DB::table('SanPham')->where('MaSP',$MaSP)->get();
      // $dm = $sp->MaDM;
      
      foreach ($sp as $value) {
        $madm = ($value->MaDM);
        $dm = DB::table('DanhMuc')->where('MaDM',$madm)->get();
        foreach ($dm as $value) {
           $tendm = $value->TenDM;
           $danhmu = array('MaDM'=>$madm,'TenDM'=>$tendm);
           $danhmuc = array($danhmu);
        //    $danhmuc = (object)$danh;
        // }
      }
      return $danhmuc;
    }
  }
      protected function getTHbyMasp($MaSP){
      $sp = DB::table('SanPham')->where('MaSP',$MaSP)->get();
      // $dm = $sp->MaDM;
      
      foreach ($sp as $value) {
        $math = ($value->MaNCC);
        $th = DB::table('NhaCC')->where('MaNCC',$math)->get();
        foreach ($th as $value) {
           $tenth = $value->TenNCC;
           $thuonghi = array('MaTH'=>$math,'TenTH'=>$tenth);
           $thuonghieu = array($thuonghi);
        //    $danhmuc = (object)$danh;
        // }
      }
      return $thuonghieu;
    }
  }

  protected function getspbyMaSP($MaSP){
    $sp = DB::table('SanPham')->where('MaSP',$MaSP)->get();
    return $sp;
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
