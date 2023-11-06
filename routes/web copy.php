<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LihatNilaiControler;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagenotController;
use App\Http\Controllers\KartuController;



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

Route::get('/salam',function(){
    return "assalamualaikum selamat belajar laravel";
});

//tambah routing dengan parameter
Route::get('/staff/{nama}/{divisi}',function($nama, $divisi){
    return 'Nama pegawai : ' .$nama. '<br> Departmen : ' .$divisi;
});

//routing memanggil nama file dari view
Route::get('/kondisi',function(){
    return view('kondisi');
});


Route::get('/nilai',function(){
    return view('coba.nilai');
});

//routing dengan view dan array date
Route::get('/daftarnilai',function(){
    return view('coba.daftar');
});

//melihat nilai mahasiswa
Route::get('/datamahasiswa',[LihatNilaiControler::class,'dataMahasiswa']);


Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/notfound',[PagenotController::class,'index']);

// //contoh pemanggilam secara satu persatu menggunankan function
// Route::resource('kartu', KartuController::class);

//memanggil seluruh fungsi atau function
Route::resource('kartu',KartuController::class);