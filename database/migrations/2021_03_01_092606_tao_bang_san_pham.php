<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoBangSanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SanPham', function (Blueprint $table) {
            $table->increments('MaSP');
            $table->string('TenSP',50);
            $table->integer('MaDM')->unsigned();
            $table->integer('MaNCC')->unsigned();
            $table->integer('SoLuong');
            $table->text('MoTa');
            $table->decimal('amount', $precision = 10, $scale = 0);
            $table->string('MaAnh',50);
            $table->string('AnhNen',50);
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
        Schema::dropIfExists('SanPham');
    }
}
