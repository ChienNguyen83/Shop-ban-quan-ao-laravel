<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoBangNhaCC extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NhaCC', function (Blueprint $table) {
            $table->increments('MaNCC');
            $table->string('TenNCC',50);
            $table->date('NgayBDCC');
            $table->date('NgayKTCC');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NhaCC');
    }
}
