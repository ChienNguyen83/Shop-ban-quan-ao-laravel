<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoBangKhuyenMai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenMai', function (Blueprint $table) {
            $table->increments('MaKM');
            $table->string('TenKM',50);
            $table->text('MoTa');
            $table->integer('KM_PT');
            $table->decimal('TienKM', $precision = 10, $scale = 0);
            $table->date('NgayBD');
            $table->date('NgayKT');
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
        Schema::dropIfExists('khuyenMai');
    }
}
