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
            $table->integer('MaHD')->unsigned();
            $table->integer('MaSP')->unsigned();
            $table->integer('SoLuong');
            $table->decimal('DonGia', $precision = 10, $scale = 0);
            $table->decimal('ThanhTien', $precision = 10, $scale = 0);
            $table->string('MaSize',50);
            $table->string('MaMau',50);
            $table->primary(['MaHD', 'MaSP', 'MaSize', 'MaMau']);
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
