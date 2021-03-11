<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ChiTietSanPham extends Model
{
    protected $table='ChiTietSanPham';
    public $timestamps = false;

        protected $fillable = [
        'MaSP',
        'MaSize',
        'MaMau',
        'SoLuong',
        'DonGia',

       
    ];

    // protected function getSize(){
    // 	$size = DB::table('Size')->get();
    // 	return $size;
    // }
    // protected function getMau(){
    // 	$mau = DB::table('Mau')->get();
    // 	return $mau;
    // }
    // protected function upAnh ($file=array()){
    // 	// echo '<pre>';
    // 	// print_r($file->getClientOriginalName());
    // 	// echo '</pre>';
    // 	// echo '<pre>';
    // 	// print_r($file->getRealPath());
    // 	// echo '</pre>';
    // 	// move_uploaded_file($file['pathName'], 'Anhsp/'.$file['originalName']);
    // 	$file_name = $file->getClientOriginalName();
    // 	$randomName = Str::random(4)."_".$file_name;
    // 	while (file_exists('Anhsp/'.$randomName)) {
    // 	    $randomName = Str::random(4)."_".$file_name;
    // 	}
    // 	$success=$file->move('Anhsp',$randomName);
    //     return $success;
    // }


}
