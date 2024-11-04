<?php

use App\Http\Controllers\WebAbsensiController;
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

Route::get('/absensi/mahasiswa', [WebAbsensiController::class,'index'])->name('absensi');
Route::post('/absensi/mahasiswa/initiate', [WebAbsensiController::class, 'initiateAbsensi'])->name('initiateAbsensi');
Route::post('/absensi/mahasiswa/execute', [WebAbsensiController::class,'executeAbsensi'])->name('executeAbsensi');
