<?php

use App\Http\Controllers\Sistem;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Sistem::class, 'tampil']);
Route::group(['prefix' => '/Admin'], function () {
    Route::get('/DaftarSemuaBus', [Sistem::class, 'tampilSemuaBus'])->name('DaftarSemuaBus');
    Route::post('/DaftarSemuaBus', [Sistem::class, 'tambah']);
    Route::get('/DaftarBusTersedia', [Sistem::class, 'tampilBusTersedia'])->name('DaftarBusTersedia');
    Route::get('/DaftarBusDisewa', [Sistem::class, 'tampilBusDisewa'])->name('DaftarBusDisewa');
    Route::get('/Search', [Sistem::class, 'cari']);
    Route::get('/DaftarSemuaBus/hapus-data/{id}', [Sistem::class, 'hapus'])->name('hapus');
    Route::put('/DaftarSemuaBus/update-data/{id}', [Sistem::class, 'ubah'])->name('ubah');
    Route::get('/Beranda',[Sistem::class, 'tampilBerandaAdmin'])->name('beranda');
    Route::get('/penyewaan',[Sistem::class, 'tampilStatusPenyewaan']);
    Route::put('/penyewaan/{idSewa}/{idBus}',[Sistem::class, 'ubahStatusPenyewaan']);
    Route::get('/penyewaan/hapus-data/{idSewa}',[Sistem::class, 'hapusPenyewaan']);
});
Route::get('/daftar', [Sistem::class, 'tampilDaftarAkun']);
Route::post('/daftar', [Sistem::class, 'daftar'])->name('daftar');
Route::post('/SewaBus',[Sistem::class, 'sewa'])->name('sewa');
Route::get('/penyewaan/{idAkun}',[Sistem::class, 'tampilStatusDisewa']);
Route::get('/profil/{idAkun}', [Sistem::class, 'tampilProfil']);
Route::put('/profil/{idAkun}', [Sistem::class, 'ubahProfil'])->name('ubahProfil');
Route::get('/masuk', [Sistem::class, 'tampilMasuk']);
Route::post('/masuk', [Sistem::class, 'masuk'])->name('masuk');
Route::get('logout', [Sistem::class, 'keluar'])->name('keluar');