<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello', function () {
//     return 'tester';
// });

// Route::get('blog', function () {
//     return view('blog');
// });

Route::get('dosen',[DosenController::class,'index']);

Route::get('/pegawai',[PegawaiController::class,'index']);
Route::get('/pegawai/tambah',[PegawaiController::class,'tambah']);
Route::post('/pegawai/update',[PegawaiController::class,'update']);
Route::get('/pegawai/edit/{id}',[PegawaiController::class,'edit']);
Route::get('/pegawai/hapus/{id}',[PegawaiController::class,'hapus']);
Route::post('/pegawai/store',[PegawaiController::class,'store']);
Route::get('/formulir',[PegawaiController::class,'formulir']);
Route::post('/formulir/proses',[PegawaiController::class,'proses']);

Route::get('/blog',[BlogController::class,'home']);
Route::get('/blog/tentang',[BlogController::class,'tentang']);
Route::get('/blog/kontak',[BlogController::class,'kontak']);
