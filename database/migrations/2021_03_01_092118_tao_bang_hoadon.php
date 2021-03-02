<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoBangHoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HoaDon', function (Blueprint $table) {
            $table->increments('MaHD');
            $table->integer('MaKH')->unsigned();
            $table->integer('MaNV')->unsigned();
            $table->date('NgayDat');
            $table->date('NgayGiao');
            $table->text('TinhTrang');
            $table->decimal('TongTien', $precision = 10, $scale = 0);
            $table->integer('MaNVC');
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
        Schema::dropIfExists('HoaDon');
    }
}
