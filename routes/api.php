<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LayananController;
use App\Http\Controllers\Api\MetodePengirimanController;
use App\Http\Controllers\Api\PesananController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\RiwayatController;
use App\Http\Controllers\Api\UpdatePasswordController;
use App\Http\Controllers\Api\ProductController;

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

Route::post('login', [LoginController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);
Route::get('layanan', [LayananController::class, 'layanan']);
Route::match(['GET', 'POST'], 'transaction', [TransactionController::class, 'transaction']);
// Route::get('detailTransaction', [TransactionController::class, 'detailTransaction']);
Route::get('riwayat', [RiwayatController::class, 'riwayat']);
Route::get('UpdatePassword', [UpdatePasswordController::class, 'UpdatePassword']);
Route::get('metode_pengiriman', [MetodePengirimanController::class, 'MetodePengiriman']);
Route::get('pesanan', [PesananController::class, 'pesanan']);
