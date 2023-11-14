<?php

use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\LoaiNhanVienController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\SoCaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DichVuController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\LoaiDichVuController;
use App\Models\Cthd;

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
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');
    Route::resource('hoadon', HoaDonController::class);
    Route::resource('cthd', CthdController::class);
    Route::resource('khach_hangs', KhachHangController::class);
    Route::resource('loai_nhan_viens', LoaiNhanVienController::class);
    Route::resource('nhan_viens', NhanVienController::class);
    Route::resource('so_cas', SoCaController::class);
    Route::resource('loai_dich_vus', LoaiDichVuController::class);
    Route::resource('dich_vus', DichVuController::class);
    Route::get('nhan-viens/export', [NhanVienController::class, 'export'])->name('nhan_viens.export');
    Route::get('loai-nhan-viens/export', [LoaiNhanVienController::class, 'export'])->name('loai_nhan_viens.export');
    Route::get('khach-hangs/export', [KhachHangController::class, 'export'])->name('khach_hangs.export');

});
//Route::get('/', function () {
//    return view('index');
//})->name('index');
Route::get('/', [DichVuController::class, 'homeIndex'])->name('index');
