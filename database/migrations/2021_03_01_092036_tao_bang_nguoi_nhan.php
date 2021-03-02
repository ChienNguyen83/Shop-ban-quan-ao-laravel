<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoBangNguoiNhan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NguoiNhan', function (Blueprint $table) {
            $table->integer('MaHD')->unsigned();
            $table->string('TenNN',50);
            $table->text('DiaChiNN');
            $table->bigInteger('SDTNN');
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
        Schema::dropIfExists('NguoiNhan');
    }
}
