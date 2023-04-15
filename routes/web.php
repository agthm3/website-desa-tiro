<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\HomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//pages Home
Route::get('/', [HomeController::class, 'index'])->name('home');

//pages Berita
Route::get('/berita',[ BeritaController::class, 'index'])->name('berita.index');

//pages Pengumuman
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');

//pages Destinasi
Route::get('/destinasi', [DestinasiController::class, 'index'])->name('destinasi.index');

//pages KontakKami
Route::get('/konktak', [KontakController::class, 'index'])->name('kontak.index');

//pages Layanan
Route::get('/profil', [LayananController::class, 'profil'] )->name('profil.index');
Route::get('/pemerintah', [LayananController::class, 'pemerintah'])->name('pemerintah.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
