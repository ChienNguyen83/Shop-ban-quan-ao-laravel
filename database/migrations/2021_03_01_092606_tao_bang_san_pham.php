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
            $table->text('MoTa');
            
            // $table->string('MaAnh',50);
            $table->string('AnhNen',250);
            $table->string('Anh1',250);
            $table->string('Anh2',250);
            $table->string('Anh3',250);
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
