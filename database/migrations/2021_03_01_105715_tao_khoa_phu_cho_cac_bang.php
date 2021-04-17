<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoKhoaPhuChoCacBang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('NguoiNhan', function (Blueprint $table) {
            $table->foreign('MaHD')->references('MaHD')->on('HoaDon');
        });
        Schema::table('HoaDon', function (Blueprint $table) {
            // $table->foreign('MaKH')->references('MaKH')->on('KhachHang');
            // $table->foreign('MaNV')->references('MaNV')->on('NhanVien');
            
        });
        

        Schema::table('ChiTietHoaDon', function (Blueprint $table) {
            $table->foreign('MaHD')->references('MaHD')->on('HoaDon');
            $table->foreign('MaMau')->references('MaMau')->on('Mau');
            $table->foreign('MaSP')->references('MaSP')->on('SanPham');
            $table->foreign('MaSize')->references('MaSize')->on('Size');
        });
        Schema::table('phieuNhap', function (Blueprint $table) {
            $table->foreign('MaNV')->references('MaNV')->on('NhanVien');
            $table->foreign('MaSP')->references('MaSP')->on('SanPham');

        });
        Schema::table('SanPhamKhuyenMai', function (Blueprint $table) {
            $table->foreign('MaSP')->references('MaSP')->on('SanPham');
            $table->foreign('MaKM')->references('MaKM')->on('KhuyenMai');
        });
        Schema::table('BinhLuan', function (Blueprint $table) {
            $table->foreign('MaSP')->references('MaSP')->on('SanPham');
            $table->foreign('MaKH')->references('MaKH')->on('KhachHang');
        });
        Schema::table('AnhSP', function (Blueprint $table) {
            $table->foreign('MaSP')->references('MaSP')->on('SanPham');
        });
        Schema::table('SanPham', function (Blueprint $table) {
            $table->foreign('MaDM')->references('MaDM')->on('DanhMuc');
            $table->foreign('MaNCC')->references('MaNCC')->on('NhaCC');
        });
        Schema::table('ChiTietSanPham', function (Blueprint $table) {
            $table->foreign('MaSP')->references('MaSP')->on('SanPham');
            $table->foreign('MaSize')->references('MaSize')->on('Size');
            $table->foreign('MaMau')->references('MaMau')->on('Mau');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('NguoiNhan', function (Blueprint $table) {
            $table->dropForeign('NguoiNhan_MaHD_foreign');
        });
        Schema::table('HoaDon', function (Blueprint $table) {
            $table->dropForeign('HoaDon_MaKH_foreign');
            $table->dropForeign('HoaDon_MaNV_foreign');
            
        });
        Schema::table('ChiTietHoaDon', function (Blueprint $table) {
            $table->dropForeign('ChiTietHoaDon_MaHD_foreign');
            $table->dropForeign('ChiTietHoaDon_MaMau_foreign');
            $table->dropForeign('ChiTietHoaDon_MaSP_foreign');
            $table->dropForeign('ChiTietHoaDon_MaSize_foreign');
        });
        Schema::table('phieuNhap', function (Blueprint $table) {
            $table->dropForeign('phieuNhap_MaNV_foreign');
            $table->dropForeign('phieuNhap_MaSP_foreign');

        });
        Schema::table('SanPhamKhuyenMai', function (Blueprint $table) {
            $table->dropForeign('SanPhamKhuyenMai_MaSP_foreign');
            $table->dropForeign('SanPhamKhuyenMai_MaKM_foreign');
        });
        Schema::table('BinhLuan', function (Blueprint $table) {
            $table->dropForeign('BinhLuan_MaSP_foreign');
            $table->dropForeign('BinhLuan_MaKH_foreign');
        });
        Schema::table('AnhSP', function (Blueprint $table) {
            $table->dropForeign('AnhSP_MaSP_foreign');
        });
        Schema::table('SanPham', function (Blueprint $table) {
            $table->dropForeign('SanPham_MaDM_foreign');
            $table->dropForeign('SanPham_MaNCC_foreign');
        });
        Schema::table('ChiTietSanPham', function (Blueprint $table) {
            $table->dropForeign('ChiTietSanPham_MaSP_foreign');
             $table->dropForeign('ChiTietSanPham_MaSize_foreign');
            $table->dropForeign('ChiTietSanPham_MaMau_foreign');
        });
       
        
    }
}
