<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoBangChiTietHoaDon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietHoaDon', function (Blueprint $table) {
            $table->integer('MaHD');
            $table->integer('MaSP');
            $table->integer('SoLuong');
            $table->decimal('DonGia', $precision = 10, $scale = 0);
            $table->decimal('ThanhTien', $precision = 10, $scale = 0);
            $table->integer('Size');
            $table->integer('MaMau');
            $table->primary(['MaHD', 'MaSP', 'Size', 'MaMau']);
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
        Schema::dropIfExists('ChiTietHoaDon');
    }
}
