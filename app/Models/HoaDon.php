<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table='HoaDon';
    public $timestamps = false;
    protected $fillable = [
        'MaKH',
        'MaNV',
        'NgayDat',
        'NgayGiao',
        'TinhTrang',
        'TongTien',
        'MaNVc',
       
    ];
   public function insertcthd(){
   	  
   }
}
