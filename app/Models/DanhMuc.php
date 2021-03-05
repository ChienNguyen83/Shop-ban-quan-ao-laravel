<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    
    protected $table='DanhMuc';
    protected $fillable = [
        'TenDM',
       
    ];
    public $timestamps = false;
    // public function SanPham(){
    // 	return $this->hasMany('Models\SanPham','MaDM','MaDM');
    // }
    protected function getTenDM($MaDM){
    	$data = DB::table('DanhMuc')->select('TenDM')->where('MaDM',$MaDM)->get();
    	return $data;
    }
    protected function SuaDM($name,$MaDM) {
            $updated = DB::table('DanhMuc')
            ->where('MaDM', '=', $MaDM)
            ->update([
                'TenDM'       => $name
              ]);  

            return $updated;
    }
    protected function XoaDM ($MaDM){
    	$delete = DB::table('DanhMuc')->where('MaDM', '=', $MaDM)->delete();
    }
    
}
