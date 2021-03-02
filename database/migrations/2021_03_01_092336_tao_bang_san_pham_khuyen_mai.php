<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoBangSanPhamKhuyenMai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SanPhamKhuyenmai', function (Blueprint $table) {
            $table->integer('MaSP')->unsigned();
            $table->integer('MaKM')->unsigned();
            $table->primary(['MaSP', 'MaKM']);
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
        Schema::dropIfExists('SanPhamKhuyenmai');
    }
}
