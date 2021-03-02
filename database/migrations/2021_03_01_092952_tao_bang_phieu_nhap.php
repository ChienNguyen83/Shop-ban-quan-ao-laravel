<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoBangPhieuNhap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieuNhap', function (Blueprint $table) {
            $table->increments('MaPN');
            $table->integer('MaNV')->unsigned();
            $table->integer('MaSP')->unsigned();
            $table->integer('SoLuong');
            $table->decimal('DonGiaNhap', $precision = 10, $scale = 0);
            $table->decimal('TongTienNhap', $precision = 10, $scale = 0);
            $table->date('NgayNhap');
            $table->string('Note',100);
            $table->integer('Size');
            $table->string('Mau',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phieuNhap');
    }
}
