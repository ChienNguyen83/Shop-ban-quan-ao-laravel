<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
    public function TenDM($Masp){
      $TenDM = DB::table('DanhMuc')->where('MaDM',$MaDM)->orderBy('TenDM', 'desc')->limit(1)->get();
      return $TenDM;
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
