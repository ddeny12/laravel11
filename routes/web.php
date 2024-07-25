<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::resource('barang', BarangController::class);
// Route::resource('supplier', SupplierController::class);
// Route::resource('pegawai', PegawaiController::class);
// // Route::resource('kendaraan', KendaraanController::class);
// // Route::resource('customer', CustomerController::class);
// // Route::resource('keluhan', KeluhanController::class);

Route::get('/barang/search', [BarangController::class, 'search'])->name('barang.search');
Route::get('/supplier/search', [SupplierController::class, 'search'])->name('supplier.search');
Route::get('/pegawai/search', [PegawaiController::class, 'search'])->name('pegawai.search');
Route::get('/kendaraan/search', [KendaraanController::class, 'search'])->name('kendaraan.search');
Route::get('/customer/search', [CustomerController::class, 'search'])->name('customer.search');
Route::get('/keluhan/search', [KeluhanController::class, 'search'])->name('keluhan.search');



// Route::get('dashboard/admin', [DashboardController::class, 'admin'])->middleware(['auth', 'admin']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('dashboard/admin', function () {
        return view('dashboard.admin');
    })->name('dashboard.admin');

    Route::resource('barang', BarangController::class);
    Route::resource('supplier', SupplierController::class);
    Route::resource('pegawai', PegawaiController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('keluhan', KeluhanController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('kendaraan', KendaraanController::class);
});





