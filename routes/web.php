<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Pegawai;
use App\Http\Controllers\Jabatan;
use App\Http\Controllers\Tunjangan;
use App\Http\Controllers\Potongan;
use App\Http\Controllers\Pengguna;
use App\Http\Controllers\Akun;
use App\Http\Controllers\RekapAbsen;
use App\Http\Controllers\Jurnal;
use App\Http\Controllers\Penggajian;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
    return view('home');
});
 
Route::get('/pegawai',[Pegawai::class,'index'])->name('pegawai'); 
Route::get('/pegawai/create',[Pegawai::class,'create'])->name('pegawai_create'); 
Route::post('/pegawai/store',[Pegawai::class,'store'])->name('pegawai_store'); 
Route::get('/pegawai/edit/{id}',[Pegawai::class,'edit'])->name('pegawai_edit'); 
Route::post('/pegawai/update',[Pegawai::class,'update'])->name('pegawai_update');
Route::get('/pegawai/destroy/{id}',[Pegawai::class,'destroy'])->name('pegawai_delete'); 

Route::get('/jabatan',[Jabatan::class,'index'])->name('jabatan'); 
Route::get('/jabatan/create',[Jabatan::class,'create'])->name('jabatan_create'); 
Route::post('/jabatan/store',[Jabatan::class,'store'])->name('jabatan_store'); 
Route::get('/jabatan/edit/{id}',[Jabatan::class,'edit'])->name('jabatan_edit'); 
Route::post('/jabatan/update',[Jabatan::class,'update'])->name('jabatan_update');
Route::get('/jabatan/destroy/{id}',[Jabatan::class,'destroy'])->name('jabatan_delete'); 

Route::get('/tunjangan',[Tunjangan::class,'index'])->name('tunjangan'); 
Route::get('/tunjangan/create',[Tunjangan::class,'create'])->name('tunjangan_create'); 
Route::post('/tunjangan/store',[Tunjangan::class,'store'])->name('tunjangan_store'); 
Route::get('/tunjangan/edit/{id}',[Tunjangan::class,'edit'])->name('tunjangan_edit'); 
Route::post('/tunjangan/update',[Tunjangan::class,'update'])->name('tunjangan_update');
Route::get('/tunjangan/destroy/{id}',[Tunjangan::class,'destroy'])->name('tunjangan_delete');

Route::get('/potongan',[Potongan::class,'index'])->name('potongan'); 
Route::get('/potongan/create',[Potongan::class,'create'])->name('potongan_create'); 
Route::post('/potongan/store',[Potongan::class,'store'])->name('potongan_store'); 
Route::get('/potongan/edit/{id}',[Potongan::class,'edit'])->name('potongan_edit'); 
Route::post('/potongan/update',[Potongan::class,'update'])->name('potongan__update');
Route::get('/potongan/destroy/{id}',[Potongan::class,'destroy'])->name('potongan_delete');

Route::get('/pengguna',[Pengguna::class,'index'])->name('pengguna'); 
Route::get('/pengguna/create',[Pengguna::class,'create'])->name('pengguna_create'); 
Route::post('/pengguna/store',[Pengguna::class,'store'])->name('pengguna_store'); 
Route::get('/pengguna/edit/{id}',[Pengguna::class,'edit'])->name('pengguna_edit'); 
Route::post('/pengguna/update',[Pengguna::class,'update'])->name('pengguna__update');
Route::get('/pengguna/destroy/{id}',[Pengguna::class,'destroy'])->name('pengguna_delete');

Route::get('/akun',[Akun::class,'index'])->name('akun'); 
Route::get('/akun/create',[Akun::class,'create'])->name('akun_create'); 
Route::post('/akun/store',[Akun::class,'store'])->name('akun_store'); 
Route::get('/akun/edit/{id}',[Akun::class,'edit'])->name('akun_edit'); 
Route::post('/akun/update',[Akun::class,'update'])->name('akun_update');
Route::get('/akun/destroy/{id}',[Akun::class,'destroy'])->name('akun_delete');

Route::get('/rekapabsen',[RekapAbsen::class,'index'])->name('rekapabsen'); 
Route::get('/rekapabsen/create',[RekapAbsen::class,'create'])->name('rekapabsen_create'); 
Route::post('/rekapabsen/store',[RekapAbsen::class,'store'])->name('rekapabsen_store'); 
Route::get('/rekapabsen/edit/{id}',[RekapAbsen::class,'edit'])->name('rekapabsen_edit'); 
Route::post('/rekapabsen/update',[RekapAbsen::class,'update'])->name('rekapabsen_update');
Route::get('/rekapabsen/print/{id}',[RekapAbsen::class,'print'])->name('rekapabsen_print');
Route::get('/rekapabsen/destroy/{id}',[RekapAbsen::class,'destroy'])->name('rekapabsen_delete');

Route::get('/penggajian',[Penggajian::class,'index'])->name('penggajian'); 
Route::get('/penggajian/create',[Penggajian::class,'create'])->name('penggajian_create'); 
Route::post('/penggajian/store',[Penggajian::class,'store'])->name('penggajian_store'); 
Route::get('/penggajian/edit/{id}',[Penggajian::class,'edit'])->name('penggajian_edit'); 
Route::post('/penggajian/update',[Penggajian::class,'update'])->name('penggajian_update');
Route::get('/penggajian/print/{id}',[Penggajian::class,'print'])->name('penggajian_print');
Route::get('/penggajian/destroy/{id}',[Penggajian::class,'destroy'])->name('penggajian_delete');

Route::get('/jurnal',[Jurnal::class,'index'])->name('jurnal'); 
Route::get('/jurnal/create',[Jurnal::class,'create'])->name('jurnal_create'); 
Route::post('/jurnal/store',[Jurnal::class,'store'])->name('jurnal_store'); 
Route::get('/jurnal/edit/{id}',[Jurnal::class,'edit'])->name('jurnal_edit'); 
Route::post('/jurnal/update',[Jurnal::class,'update'])->name('jurnal_update');
Route::get('/jurnal/destroy/{id}',[Jurnal::class,'destroy'])->name('jurnal_delete');

 
Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
});