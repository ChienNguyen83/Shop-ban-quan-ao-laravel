<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
     protected $table='ChiTietHoaDon';
    public $timestamps = false;
    protected $fillable = [
    	'MaHD',
        'MaSP',
        'SoLuong',
        'DonGia',
        'ThanhTien',
        'MaSize',
        'MaMau', 
    ];
}
