<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProdukMasukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DetailTransaksiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;


Route::get('/login', [LoginController::class, 'showlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin']);
Route::get('/postlogout', [LoginController::class, 'postlogout']);
Route::middleware(['auth'])->group(function () {

    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/tambah', [UserController::class, 'create']);
    Route::post('/user/simpan', [UserController::class, 'store']);  
    Route::get('/user/show/{id}', [UserController::class, 'show']);  
    Route::post('/user/update/{id}', [UserController::class, 'update']);
    Route::get('/user/delete/{id}', [UserController::class, 'destroy']);
    
    Route::get('/supplier', [SupplierController::class, 'index']);
    Route::get('/supplier/tambah', [SupplierController::class, 'create']);
    Route::post('/supplier/simpan', [SupplierController::class, 'store']);
    Route::get('/supplier/show/{id}', [SupplierController::class, 'show']);
    Route::post('/supplier/update/{id}', [SupplierController::class, 'update']);
    Route::get('/supplier/delete/{id}', [SupplierController::class, 'destroy']);
    
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/tambah', [ProdukController::class, 'create']);
    Route::post('/produk/simpan', [ProdukController::class, 'store']);
    Route::get('/produk/show/{id}', [ProdukController::class, 'show']);
    Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
    
    Route::get('/produkmasuk', [ProdukMasukController::class, 'index']);
    Route::get('/produkmasuk/tambah', [ProdukMasukController::class, 'create']);
    Route::post('/produkmasuk/simpan', [ProdukMasukController::class, 'store']);
    Route::get('/produkmasuk/delete/{id}', [ProdukMasukController::class, 'destroy']);
    
    Route::get('/transaksi', [TransaksiController::class, 'index']);
    Route::get('/transaksi/tambah', [TransaksiController::class, 'create']);
    Route::get('/transaksi/checkout/{id}', [TransaksiController::class, 'store']);
    Route::post('/transaksi/show/{id}', [TransaksiController::class, 'show']);
    Route::post('/transaksi/update/{id}', [TransaksiController::class, 'update']);
    
    Route::get('/transaksi/struk/{id}', [TransaksiController::class, 'struk']);
    Route::post('/transaksi/proses/{id}', [DetailTransaksiController::class, 'store']);
    Route::get('/transaksi/delete/{id}', [DetailTransaksiController::class, 'destroy']);
    
    
});
    
    
    
    