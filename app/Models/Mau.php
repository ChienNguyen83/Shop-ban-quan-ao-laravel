<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mau extends Model
{
    use HasFactory;

    protected $table='Mau';
    public $timestamps = false;
    protected $fillable = [
        'MaMau',
       
    ];
        protected function XoaMau ($MaMau){
        $delesp = DB::table('ChiTietSanPham')->where('MaMau',$MaMau)->delete();

        // foreach ($delesp as $value) {
        //     $delectsp = DB::table('ChiTietSanPham')->where('MaSP',$value->MaSP)->delete();
        // }
        // $delesp = DB::table('SanPham')->where('MaMau',$MaMau)->delete();
    	$delete = DB::table('Mau')->where('MaMau', '=', $MaMau)->delete();
    }
}
