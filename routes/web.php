<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/thu', function () {
    return view('admin.danhmuc.danhsach');
});
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'danhmuc'], function(){
		Route::get('danhsach','DanhMucController@getDanhSach');
		Route::get('sua/{MaDM}','DanhMucController@getSua');
		Route::post('sua/{MaDM}','DanhMucController@postSua');
		Route::get('them','DanhMucController@getThem');
		Route::post('them','DanhMucController@postThem');
		Route::get('xoa/{MaDM}','DanhMucController@getXoa');
		
	});
	Route::group(['prefix'=>'sanpham'], function(){
		Route::get('danhsach','SanPhamController@getDanhSach');
		Route::get('sua/{MaDM}','SanPhamController@getSua');
		Route::post('sua/{MaDM}','SanPhamController@postSua');
		Route::get('them','SanPhamController@getThem');
		Route::post('them','SanPhamController@postThem');
		
        Route::get('themmau','MauController@getDanhSach');
		Route::post('themmau','MauController@postThem');
		Route::get('xoamau/{MaMau}','MauController@getXoa');
		

		
		Route::post('themchitietsp','ThemChiTietSPController@themChiTietSP');
		
	});
		Route::group(['prefix'=>'chitietsanpham'], function(){
		Route::get('danhsach','SanPhamController@getDanhSach');
		Route::get('sua/{MaDM}','SanPhamController@getSua');
		Route::post('sua/{MaDM}','SanPhamController@postSua');
		Route::get('them','SanPhamController@getThem');
		Route::post('them','SanPhamController@themChiTiet');

		
	});
	Route::group(['prefix'=>'thuonghieu'], function(){
		Route::get('danhsach','ThuongHieuController@getDanhSach');
		Route::get('sua/{MaDM}','ThuongHieuController@getSua');
		Route::post('sua/{MaDM}','ThuongHieuController@postSua');
		Route::get('them','ThuongHieuController@getThem');
		Route::post('them','ThuongHieuController@postThem');

		
	});
	// Route::group(['prefix'=>'nhanvien'], function(){
	// 	Route::get('danhsach','TheLoaiController@getDanhSach');
	// 	Route::get('sua','TheLoaiController@getSua');
	// 	Route::get('them','TheLoaiController@getThem');
	// });
	// Route::group(['prefix'=>'sanpham'], function(){
	// 	Route::get('danhsach','TheLoaiController@getDanhSach');
	// 	Route::get('sua','TheLoaiController@getSua');
	// 	Route::get('them','TheLoaiController@getThem');
	// });
});
