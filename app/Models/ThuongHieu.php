<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThuongHieu extends Model
{
    use HasFactory;
    protected $table='NhaCC';
    protected $fillable = [
        'TenNCC',
        'NgayBDCC',
       
    ];
    public $timestamps = false;
    // public function SanPham(){
    // 	return $this->hasMany('Models\SanPham','MaDM','MaDM');
    // }
}
