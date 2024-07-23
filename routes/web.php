<?php

use App\Http\Controllers\TindakanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\PemberianObatController;
use App\Http\Controllers\WilayahPasienController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/dashboard2', [DashboardController::class, 'index'])->name('pages.dashboard');

Route::resource('wilayah_pasien', WilayahPasienController::class);
Route::resource('tindakan', TindakanController::class);
Route::resource('obat', ObatController::class);
Route::resource('pegawai', PegawaiController::class);
Route::resource('pelayanan', PelayananController::class);
Route::resource('pemberian_obat', PemberianObatController::class);

require __DIR__.'/auth.php';
