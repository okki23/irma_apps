<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Pegawai;
use App\Http\Controllers\Jabatan;
use App\Http\Controllers\Tunjangan;
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

