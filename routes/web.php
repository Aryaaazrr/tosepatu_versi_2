<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\KelolaTimController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\DaftarBeritaController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\PengaturanTokoController;
use App\Http\Controllers\PengaturanProfilController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;

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
// Auth::routes();

Route::middleware('only_sign_in')->group(function () {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticate']);
    Route::get('register', [AuthController::class, 'register'])->name('register');
    
    Route::get('forgot', [ForgotController::class, 'index'])->name('forgot');

    Route::get('auth/google', [AuthController::class, 'google'])->name('google-login');
    Route::get('auth/google/callback', [AuthController::class, 'handleGoogle'])->name('google-callback');
});


Route::get('verify', function () {
    return view('auth.verify-email');
});

Route::post('verify', [AuthController::class, 'verify'])->name('verify');

Route::get('/email/verify', function () {
    return view('email.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    if (Auth::user()->role_id == 1) {
        return redirect('superadmin/beranda');
    }

    if (Auth::user()->role_id == 2) {
        return redirect('admin/beranda');
    }

    if (Auth::user()->role_id == 3) {
        return redirect('karyawan/beranda');
    }
    
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('logout', [LoginController::class, 'destroy'])->name('logout');
    
    Route::get('superadmin/beranda', [SuperAdminController::class, 'index'])->middleware('only_superadmin')->name('super-beranda');

    Route::get('admin/beranda', [AdminController::class, 'index'])->middleware('only_admin')->name('super-beranda');

    Route::get('superadmin/pesanan', [PesananController::class, 'index'])->middleware('only_superadmin')->name('super-pesanan');
    Route::get('superadmin/pesanan/view/{id}', [PesananController::class, 'show'])->middleware('only_superadmin')->name('super-pesanan-show');
    Route::get('superadmin/pesanan/{id}', [PesananController::class, 'edit'])->middleware('only_superadmin')->name('super-pesanan-edit');
    Route::put('superadmin/pesanan/{id}', [PesananController::class, 'update'])->middleware('only_superadmin')->name('super-pesanan-update');

    Route::get('superadmin/pelanggan', [PelangganController::class, 'index'])->middleware('only_superadmin')->name('super-pelanggan');
    Route::get('superadmin/pelanggan/{id}', [PelangganController::class, 'show'])->middleware('only_superadmin')->name('super-pelanggan-show');
        
    Route::get('superadmin/kelola-tim', [KelolaTimController::class, 'index'])->middleware('only_superadmin')->name('super-kelola-tim');
    Route::get('superadmin/tambah-tim', [KelolaTimController::class, 'create'])->middleware('only_superadmin')->name('super-create-kelola-tim');
    Route::post('superadmin/tambah-tim', [KelolaTimController::class, 'store'])->middleware('only_superadmin')->name('super-store-kelola-tim');
    Route::get('superadmin/kelola-tim/view/{id}', [KelolaTimController::class, 'show'])->middleware('only_superadmin')->name('super-show-kelola-tim');
    Route::get('superadmin/kelola-tim/edit/{id}', [KelolaTimController::class, 'edit'])->middleware('only_superadmin')->name('super-edit-kelola-tim');
    Route::put('superadmin/kelola-tim/edit/{id}', [KelolaTimController::class, 'update'])->middleware('only_superadmin')->name('super-update-kelola-tim');
    // Route::get('superadmin/kelola-tim/{id}', [KelolaTimController::class, 'destroy'])->middleware('only_superadmin')->name('super-edit-kelola-tim');

    
    Route::get('superadmin/produk', [ProdukController::class, 'index'])->middleware('only_superadmin')->name('super-produk');
    Route::get('superadmin/tambah-produk', [ProdukController::class, 'create'])->middleware('only_superadmin')->name('super-create-produk');
    Route::post('superadmin/tambah-produk', [ProdukController::class, 'store'])->middleware('only_superadmin')->name('super-store-produk');
    Route::get('superadmin/produk/edit/{id}', [ProdukController::class, 'edit'])->middleware('only_superadmin')->name('super-edit-produk');
    Route::put('superadmin/produk/edit/{id}', [ProdukController::class, 'update'])->middleware('only_superadmin')->name('super-update-produk');
    Route::get('superadmin/produk/{id}', [ProdukController::class, 'destroy'])->middleware('only_superadmin')->name('super-destroy-produk');
    
    Route::get('superadmin/daftar-berita', [DaftarBeritaController::class, 'index'])->middleware('only_superadmin')->name('super-daftar-berita');
    Route::get('superadmin/tambah-daftar-berita', [DaftarBeritaController::class, 'create'])->middleware('only_superadmin')->name('super-create-daftar-berita');
    Route::post('superadmin/tambah-daftar-berita', [DaftarBeritaController::class, 'store'])->middleware('only_superadmin')->name('super-store-daftar-berita');
    Route::get('superadmin/daftar-berita/edit/{id}', [DaftarBeritaController::class, 'edit'])->middleware('only_superadmin')->name('super-edit-daftar-berita');
    Route::put('superadmin/daftar-berita/edit/{id}', [DaftarBeritaController::class, 'update'])->middleware('only_superadmin')->name('super-update-daftar-berita');
    // Route::get('superadmin/tambah-daftar-berita', [DaftarBeritaController::class, 'create'])->middleware('only_superadmin')->name('super-create-daftar-berita');
    
    Route::get('superadmin/kategori-berita', [KategoriBeritaController::class, 'index'])->middleware('only_superadmin')->name('super-kategori-berita');
    Route::get('superadmin/tambah-kategori-berita', [KategoriBeritaController::class, 'create'])->middleware('only_superadmin')->name('super-create-kategori-berita');
    Route::post('superadmin/tambah-kategori-berita', [KategoriBeritaController::class, 'store'])->middleware('only_superadmin')->name('super-store-kategori-berita');
    Route::get('superadmin/kategori-berita/edit/{id}', [KategoriBeritaController::class, 'edit'])->middleware('only_superadmin')->name('super-edit-kategori-berita');
    Route::put('superadmin/kategori-berita/edit/{id}', [KategoriBeritaController::class, 'update'])->middleware('only_superadmin')->name('super-update-kategori-berita');

    Route::get('superadmin/laporan', [LaporanController::class, 'index'])->middleware('only_superadmin')->name('super-laporan');
    
    Route::get('superadmin/pengaturan-toko', [PengaturanTokoController::class, 'index'])->middleware('only_superadmin')->name('super-pengaturan-toko');
    Route::get('superadmin/tambah-metode-pengaturan-toko', [PengaturanTokoController::class, 'createMetode'])->middleware('only_superadmin')->name('super-create-metode-pengaturan-toko');
    Route::post('superadmin/tambah-metode-pengaturan-toko', [PengaturanTokoController::class, 'storeMetode'])->middleware('only_superadmin')->name('super-store-metode-pengaturan-toko');
    Route::get('superadmin/metode-pengaturan-toko/edit/{id}', [PengaturanTokoController::class, 'editMetode'])->middleware('only_superadmin')->name('super-edit-metode-pengaturan-toko');
    Route::put('superadmin/metode-pengaturan-toko/edit/{id}', [PengaturanTokoController::class, 'updateMetode'])->middleware('only_superadmin')->name('super-update-metode-pengaturan-toko');
    
    Route::get('superadmin/tambah-wilayah-pengaturan-toko', [PengaturanTokoController::class, 'createWilayah'])->middleware('only_superadmin')->name('super-create-wilayah-pengaturan-toko');
    Route::post('superadmin/tambah-wilayah-pengaturan-toko', [PengaturanTokoController::class, 'storeWilayah'])->middleware('only_superadmin')->name('super-store-wilayah-pengaturan-toko');
    Route::get('superadmin/wilayah-pengaturan-toko/edit/{id}', [PengaturanTokoController::class, 'editWilayah'])->middleware('only_superadmin')->name('super-edit-wilayah-pengaturan-toko');
    Route::put('superadmin/wilayah-pengaturan-toko/edit/{id}', [PengaturanTokoController::class, 'updateWilayah'])->middleware('only_superadmin')->name('super-update-wilayah-pengaturan-toko');
    
    Route::get('superadmin/pengaturan-profil', [PengaturanProfilController::class, 'index'])->middleware('only_superadmin')->name('super-pengaturan-profil');
    Route::put('superadmin/pengaturan-profil', [PengaturanProfilController::class, 'update'])->middleware('only_superadmin')->name('super-pengaturan-profil-update');
});
