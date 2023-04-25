<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\HomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\NewsController;
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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

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

//================================================================================================

// Dashboard Home
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Dashboard News
Route::get('/news', [NewsController::class, 'index'])->name('dashboard.news.index');
Route::get('/news/create', [NewsController::class, 'create'])->name('dashboard.news.create');
Route::post('/news/create', [NewsController::class, 'store'])->name('dashboard.news.store');
Route::get('/news/detail/{news}', [NewsController::class, 'show'])->name('dashboard.news.show');
Route::get('/news/edit/{news}', [NewsController::class, 'edit'])->name('dashboard.news.edit');
Route::patch('/news/edit/{news}', [NewsController::class, 'update'])->name('dashboard.news.update');

// Dashboard announcement
Route::get('/announcement', [AnnouncementController::class, 'index'])->name('dashboard.announcement.index');
Route::get('/announcement/create', [AnnouncementController::class, 'create'])->name('dashboard.announcement.create');
Route::post('/announcement/store', [AnnouncementController::class, 'store'])->name('dashboard.announcement.store');
Route::get('/announcement/detail/{announcement}',[AnnouncementController::class, 'show'])->name('dashboard.announcement.show');
Route::get('/announcement/edit/{announcement}', [AnnouncementController::class, 'edit'])->name('dashboard.announcement.edit');
Route::patch('/announcement/edit/{announcement}', [AnnouncementController::class, 'update'])->name('dashboard.announcement.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
