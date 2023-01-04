<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminBrandController;
use App\Http\Controllers\Admin\AdminKategoriController;
use App\Http\Controllers\Admin\AdminProdukController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('shop', [HomeController::class, 'shop'])->name('shop');

// admin
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function(){
    Route::get('dashboard', [AdminHomeController::class, 'index'])->name('admin.dashboard');
    Route::prefix('brand')->group(function(){
        Route::get('/', [AdminBrandController::class, 'index'])->name('admin.brand');
        Route::get('tambah', [AdminBrandController::class, 'tambah'])->name('admin.brand.tambah');
        Route::post('simpan', [AdminBrandController::class, 'simpan'])->name('admin.brand.simpan');
        Route::get('matikan/{id}', [AdminBrandController::class, 'toogle'])->name('admin.brand.matikan');
    });
    Route::prefix('kategori')->group(function(){
        Route::get('/', [AdminKategoriController::class, 'index'])->name('admin.kategori');
        Route::get('tambah', [AdminKategoriController::class, 'tambah'])->name('admin.kategori.tambah');
        Route::post('simpan/', [AdminKategoriController::class, 'simpan'])->name('admin.kategori.simpan');
    });
    Route::prefix('produk')->group(function(){
        Route::get('/', [AdminProdukController::class, 'index'])->name('admin.produk');
        Route::get('tambah', [AdminProdukController::class, 'tambah'])->name('admin.produk.tambah');
        Route::post('simpan/', [AdminProdukController::class, 'simpan'])->name('admin.produk.simpan');
    });
});

Auth::routes();
