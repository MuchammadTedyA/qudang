<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\qudangController;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('logout', [qudangController::class, 'logout']);

Route::post('cekLogin', [qudangController::class, 'cekLogin']);

// TAMBAH DATA ===========================

Route::get('/tambahBarang', function () {
    return view('tambahBarang');
});

Route::get('/tambahDepartemen', function () {
    return view('tambahDepartemen');
});

Route::get('/tambahSupplier', function () {
    return view('tambahSupplier');
});

Route::post('tambahbarang', [qudangController::class, 'tambahbarang']);

Route::post('tambahdepartemen', [qudangController::class, 'tambahdepartemen']);

Route::post('tambahsupplier', [qudangController::class, 'tambahsupplier']);

// LIHAT DATA =========================

Route::get('dataBarang', [qudangController::class, 'lihatDataBarang']);

Route::get('departemen', [qudangController::class, 'lihatDataDepartemen']);

Route::get('supplier', [qudangController::class, 'lihatDataSupplier']);

// HAPUS DATA ======================

Route::get('hapusBarang/{id}', [qudangController::class, 'hapusBarang']);

Route::get('hapusSupplier/{id}', [qudangController::class, 'hapusSupplier']);

Route::get('hapusDepartemen/{id}', [qudangController::class, 'hapusDepartemen']);

// UBAH DATA ========================

Route::get('formeditBarang/{id}', [qudangController::class, 'updatebarang']);

Route::post('ubahbarang', [qudangController::class, 'ubahbarang']);

Route::get('formeditSupplier/{id}', [qudangController::class, 'updatesupplier']);

Route::post('ubahsupplier', [qudangController::class, 'ubahsupplier']);

Route::get('formeditDepartemen/{id}', [qudangController::class, 'updatedepartemen']);

Route::post('ubahdepartemen', [qudangController::class, 'ubahdepartemen']);



// BARANG MASUK ===========================

Route::get('barangMasuk', [qudangController::class, 'barangMasuk']);

Route::post('tambahbarangmasuk', [qudangController::class, 'tambahbarangmasuk']);

// BARANG KELUAR ============================

Route::get('barangKeluar', [qudangController::class, 'barangKeluar']);

Route::post('tambahbarangkeluar', [qudangController::class, 'tambahbarangkeluar']);
