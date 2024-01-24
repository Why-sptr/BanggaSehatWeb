<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CemasController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\RumahSakitController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\StressTestController;
use Illuminate\Support\Facades\Route;

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

// Login/Auth
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/auth/redirect', [SocialiteController::class, 'redirect'])->name('google.redirect');
Route::get('/google/redirect', [SocialiteController::class, 'googleCallback'])->name('google.callback');
Route::put('/profile', [SocialiteController::class, 'update'])->name('profile.update');
Route::put('/profile/update-photo', [SocialiteController::class, 'updatePhoto'])->name('profile.update.photo');

// Homepage
Route::get('/', [HomepageController::class, 'index']);
Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage');
Route::get('/blog/{category}', [HomepageController::class, 'showByCategory'])->name('blog.category');

// Blog
Route::get('/blog', [ArtikelController::class, 'index'])->name('blog');
Route::get('/artikels/{id}', [ArtikelController::class, 'showDetail'])->name('artikel.detail');
Route::get('/blog/search', [ArtikelController::class, 'search'])->name('blog.search');
Route::get('/detail-blog', function () {
    return view('detail-blog');
});

// Booking Dokter
Route::get('/booking-dokter', [DokterController::class, 'index'])->name('booking-dokter');

// Cek Kesehatan
Route::get('/cek-kesehatan', function () {
    return view('cek-kesehatan');
});
Route::get('/bmi', [KalkulatorController::class, 'bmi'])->name('bmi');
Route::get('/ka lori', [KalkulatorController::class, 'kalori'])->name('kalori');
Route::get('/hpl', [KalkulatorController::class, 'hpl'])->name('hpl');
Route::get('/stress', [StressTestController::class, 'index'])->name('stress');
Route::post('/stress', [StressTestController::class, 'store']);
Route::get('/cemas', [CemasController::class, 'index'])->name('cemas');
Route::post('/cemas', [CemasController::class, 'store']);

// RS Terdekat
Route::get('/rs-terdekat', function () {
    return view('rs-terdekat');
});

Route::middleware(['auth'])->group(function () {
    // Booking Dokter
    Route::get('/booking-detail', function () {
        return view('booking-detail');
    });
    Route::post('/booking-detail', [AntrianController::class, 'store'])->name('booking-detail');
    Route::post('/book-dokter/{dokterId}/{userId}/{tanggal}/{jam}', [AntrianController::class, 'bookDokter'])->name('book-dokter');
    Route::get('/antrian/{antrianId}', [AntrianController::class, 'antrianDetail'])->name('antrian');

    // Riwayat
    Route::get('/riwayat/{userId}', [AntrianController::class, 'showRiwayat'])->name('riwayat');
    Route::get('/riwayat/{userId}/search', [AntrianController::class, 'showRiwayat'])->name('riwayat.search');

    // Profile
    Route::get('/logout', [SocialiteController::class, 'logout'])->name('logout');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
});

Route::get('/rs-terdekat', [RumahSakitController::class, 'index']);
Route::post('/rumah-sakit/cari-terdekat', [RumahSakitController::class, 'cariTerdekat']);
