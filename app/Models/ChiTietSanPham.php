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

    protected function getCTSPbyMa($MaSP){
        $ctsp = DB::table('ChiTietSanPham')->where('MaSP',$MaSP)->get();
        return $ctsp;
    }

        protected function getCTSPbyMaSP($MaSP){
        $ctsp = DB::table('SanPham')->where('MaSP',$MaSP)->get();
        return $ctsp;
    }
        protected function Xoa($MaSP){
        $ctsp = DB::table('ChiTietSanPham')->where('MaSP',$MaSP)->delete();
        return $ctsp;
    }
    protected function suactsp($MaSP,$MaSize,$MaMau,$SoLuong,$DonGia) {
                    $updated = DB::table('ChiTietSanPham')->where('MaSP',$MaSP)->where('MaSize',$MaSize)->where('MaMau',$MaMau)
            ->update([
                'MaSP'       => $MaSP,
                'MaSize'       => $MaSize,
                'MaMau'       => $MaMau,
                'SoLuong'       => $SoLuong,
                'DonGia'       => $DonGia
               
              ]);  

            return $updated;
    }

    protected function getCTSP($MaSP,$MaSize,$MaMau){
        $ctsp = DB::table('ChiTietSanPham')->where('MaSP',$MaSP)->where('MaSize',$MaSize)->where('MaMau',$MaMau)->get();
        return $ctsp;
    }
        protected function getSizebyMau($MaSP,$MaMau) {
        $ctspbyMau = DB::table('ChiTietSanPham')->where('MaSP',$MaSP)->where('MaMau',$MaMau)->get();
        return $ctspbyMau;
    }
    protected function Tongsl($MaSP){
        $sp = DB::table('ChiTietSanPham')->where('MaSP',$MaSP)->get();
        $tongsl = 0;
        foreach ($sp as $value) {
            $tongsl = $tongsl+$value->SoLuong;
        }
        return $tongsl;
    }




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
