<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Pegawai;
use App\Http\Controllers\Jabatan;
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

