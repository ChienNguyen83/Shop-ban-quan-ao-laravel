<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoBangChiTietSanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietSanPham', function (Blueprint $table) {
            $table->integer('MaSP')->unsigned();
            $table->string('MaSize',50);
            $table->string('MaMau',50);
            $table->primary(['MaSP', 'MaSize', 'MaMau']);
            $table->integer('SoLuong');
            $table->decimal('DonGia', $precision = 10, $scale = 0);
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
        Schema::dropIfExists('ChiTietSanPham');
    }
}
