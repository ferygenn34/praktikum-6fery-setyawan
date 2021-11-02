<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TabelBukuController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\OrderController;
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
    return view('tabel_buku');
});
Route::get('/tabelbuku',[TabelBukuController:: class,"tabel"] );
//routing form

Route::get('/form',[TabelBukuController:: class,"form"] ); 
Route::get('/databarang',[TabelBukuController:: class,"data"] );

//routing data barang
Route::get('/dataabarang', [BarangController::class, 'data_barang']);

// routing tugas pengganti 7
Route::get('/formulir',[BukuController:: class,'formulir']);
Route::Post('/formulir/proses',[BukuController:: class,'formulir_proses'] );

Route::get('/pesan',[OrderController:: class,'tabel_pesan']);
Route::Post('/pesan/order',[OrderController:: class,'formulir_proses'] );
