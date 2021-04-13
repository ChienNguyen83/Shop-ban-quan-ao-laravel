<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThuongHieu extends Model
{
    use HasFactory;
    protected $table='NhaCC';
    protected $fillable = [
        'TenNCC',
     
       
    ];
    public $timestamps = false;
    // public function SanPham(){
    // 	return $this->hasMany('Models\SanPham','MaDM','MaDM');
    // }
    protected function getTenTH($MaNCC) {
        $data = DB::table('NhaCC')->select('TenNCC')->where('MaNCC',$MaNCC)->get();
    	return $data;
    }
       protected function getTH($MaNCC) {
        $data = DB::table('NhaCC')->where('MaNCC',$MaNCC)->get();
        return $data;
    }
        protected function SuaTH($name,$MaNCC) {
            $updated = DB::table('NhaCC')
            ->where('MaNCC', '=', $MaNCC)
            ->update([
                'TenNCC'       => $name
              ]);  

            return $updated;
    }
        protected function XoaNCC($MaNCC){
        
        $delesp = DB::table('SanPham')->where('MaNCC',$MaNCC)->get();
        foreach ($delesp as $value) {
            $delectsp = DB::table('ChiTietSanPham')->where('MaSP',$value->MaSP)->delete();
        }
        $delesp = DB::table('SanPham')->where('MaNCC',$MaNCC)->delete();
        $delete = DB::table('NhaCC')->where('MaNCC', '=', $MaNCC)->delete();
    }

}
