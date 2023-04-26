<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PemerintahDesaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\PostDec;

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
Route::get('/dashboard/news', [NewsController::class, 'index'])->name('dashboard.news.index');
Route::get('/dashboard/news/create', [NewsController::class, 'create'])->name('dashboard.news.create');
Route::post('/dashboard/news/create', [NewsController::class, 'store'])->name('dashboard.news.store');
Route::get('/dashboard/news/detail/{news}', [NewsController::class, 'show'])->name('dashboard.news.show');
Route::get('/dashboard/news/edit/{news}', [NewsController::class, 'edit'])->name('dashboard.news.edit');
Route::patch('/dashboard/news/edit/{news}', [NewsController::class, 'update'])->name('dashboard.news.update');

// Dashboard announcement
Route::get('/dashboard/announcement', [AnnouncementController::class, 'index'])->name('dashboard.announcement.index');
Route::get('/dashboard/announcement/create', [AnnouncementController::class, 'create'])->name('dashboard.announcement.create');
Route::post('/dashboard/announcement/store', [AnnouncementController::class, 'store'])->name('dashboard.announcement.store');
Route::get('/dashboard/announcement/detail/{announcement}',[AnnouncementController::class, 'show'])->name('dashboard.announcement.show');
Route::get('/dashboard/announcement/edit/{announcement}', [AnnouncementController::class, 'edit'])->name('dashboard.announcement.edit');
Route::patch('/dashboard/announcement/edit/{announcement}', [AnnouncementController::class, 'update'])->name('dashboard.announcement.update');

// Dashboard Destination
Route::get('/dashboard/destination', [DestinationController::class, 'index'])->name('dashboard.destination.index');
Route::get('/dashboard/destination/create', [DestinationController::class, 'create'])->name('dashboard.destination.create');
Route::post('/dashboard/destination/store', [DestinationController::class, 'store'])->name('dashboard.destination.store');
Route::get('/dashboard/destination/show/{destination}', [DestinationController::class, 'show'])->name('dashboard.destination.show');
Route::get('/dashboard/destination/edit/{destination}', [DestinationController::class, 'edit'])->name('dashboard.destination.edit');
Route::patch('/dashboard/destination/edit/{destination}', [DestinationController::class, 'update'])->name('dashboard.destination.update');

// Dashboard Profil Desa
Route::get('/dashboard/profil-desa', [ProfilDesaController::class, 'index'])->name('dashboard.profil.index');
Route::get('/dashboard/profile-desa/create', [ProfilDesaController::class, 'create'])->name('dashboard.profil.create');
Route::post('/dashboard/porfile-desa/create', [ProfilDesaController::class, 'store'])->name('dashboard.profil.store');
Route::get('/dashboard/profil-desa/show/{profilDesa}', [ProfilDesaController::class, 'show'])->name('dashboard.profil.show');
Route::get('/dashboard/profil-desa/edit/{profilDesa}', [ProfilDesaController::class, 'edit'])->name('dashboard.profil.edit');
Route::patch('/dashboard/profil-desa/edit/{profilDesa}', [ProfilDesaController::class, 'update'])->name('dashboard.profil.update');


//Dashboard Pemerintah Desa
Route::get('/dashboard/pemerintah-desa', [PemerintahDesaController::class, 'index'])->name('dashboard.pemerintah.index');
Route::get('/dashboard/pemerintah-desa/create', [PemerintahDesaController::class, 'create'])->name('dashboard.pemerintah.create');
Route::post('/dashboard/pemerintah-desa/create', [PemerintahDesaController::class, 'store'])->name('dashboard.pemerintah.store');
Route::get('/dashboard/pemerintah-desa/show/{pemerintahDesa}', [PemerintahDesaController::class, 'show'])->name('dashboard.pemerintah.show');
Route::get('/dashboard/pemerintah-desa/edit/{pemerintahDesa}', [PemerintahDesaController::class, 'edit'])->name('dashboard.pemerintah.edit');
Route::patch('/dashboard/pemerintah-desa/edit/{pemerintahDesa}', [PemerintahDesaController::class, 'update'])->name('dashboard.pemerintah.update');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
