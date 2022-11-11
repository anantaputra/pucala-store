<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminBrandController;

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

// admin
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function(){
    Route::get('dashboard', [AdminHomeController::class, 'index'])->name('admin.dashboard');
    Route::prefix('brand')->group(function(){
        Route::get('/', [AdminBrandController::class, 'index'])->name('admin.brand');
    });
});

Auth::routes();
