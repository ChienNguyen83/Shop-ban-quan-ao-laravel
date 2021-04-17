<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiNhan extends Model
{
    protected $table='NguoiNhan';
    public $timestamps = false;
    protected $fillable = [
        'MaHD',
        'TenNN',
        'DiaChiNN',
        'SDTNN',
    ];
}
