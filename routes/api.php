<?php

use App\Http\Controllers\Api\AbsensiController;
use App\Http\Controllers\Api\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/echo', [TestController::class, 'index']);
Route::post('/mahasiswa/initiate-absensi', [AbsensiController::class, 'initiateAbsensi']);
Route::post('/mahasiswa/execute-absensi', [AbsensiController::class, 'executeAbsensi']);

if (App::environment('production')) {
    URL::forceScheme('https');
}
