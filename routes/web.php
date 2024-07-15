<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\PhuongThucThanhToanController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TrangThaiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index']);
    Route::resource('danhmuc', DanhMucController::class);
    Route::resource('sanpham', SanPhamController::class);
    Route::resource('chucvu', ChucVuController::class);
    Route::resource('phuongthucthanhtoan', PhuongThucThanhToanController::class);
    Route::resource('trangthai', TrangThaiController::class);

});
