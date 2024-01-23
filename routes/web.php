<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CemasController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KalkulatorController;
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

Route::get('/login', function () {
    return view('login');
});
Route::get('/auth/redirect', [SocialiteController::class, 'redirect'])->name('google.redirect');
Route::get('/google/redirect', [SocialiteController::class, 'googleCallback'])->name('google.callback');
Route::put('/profile', [SocialiteController::class, 'update'])->name('profile.update');

Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/cek-kesehatan', function () {
    return view('cek-kesehatan');
});
Route::get('/rs-terdekat', function () {
    return view('rs-terdekat');
});
Route::get('/detail-blog', function () {
    return view('detail-blog');
});
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/booking-dokter', function () {
    return view('booking-dokter');
});

Route::get('/booking-detail', function () {
    return view('booking-detail');
});
Route::get('/riwayat', function () {
    return view('riwayat');
})->name('riwayat');
// Route::get('/antrian', function () {
//     return view('antrian');
// })->name('antrian');
Route::get('/hasil-cemas', function () {
    return view('hasil-cemas');
});
Route::get('/hasil-stress', function () {
    return view('hasil-stress');
});
Route::get('/hpl', function () {
    return view('hpl');
});
Route::get('/bmi', function () {
    return view('bmi');
});
Route::get('/kalori', function () {
    return view('kalori');
});

// Homepage
Route::get('/', [HomepageController::class, 'index']);
Route::get('/homepage', [HomepageController::class, 'index']);
Route::get('/blog/{category}', [HomepageController::class, 'showByCategory'])->name('blog.category');


// Blog
Route::get('/blog', [ArtikelController::class, 'index'])->name('blog');
Route::get('/artikels/{id}', [ArtikelController::class, 'showDetail'])->name('artikel.detail');
Route::get('/blog/search', [ArtikelController::class, 'search'])->name('blog.search');

Route::get('/booking-dokter', [DokterController::class, 'index']);

// Cek Kesehatan
Route::get('/bmi', [KalkulatorController::class, 'bmi'])->name('bmi');
Route::get('/kalori', [KalkulatorController::class, 'kalori'])->name('kalori');
Route::get('/hpl', [KalkulatorController::class, 'hpl'])->name('hpl');
Route::get('/stress', [StressTestController::class, 'index'])->name('stress');
Route::post('/stress', [StressTestController::class, 'store']);
Route::get('/cemas', [CemasController::class, 'index'])->name('cemas');
Route::post('/cemas', [CemasController::class, 'store']);


Route::post('/booking-detail', [AntrianController::class, 'store'])->name('booking-detail');
Route::post('/book-dokter/{dokterId}/{userId}/{tanggal}/{jam}', [AntrianController::class, 'bookDokter'])->name('book-dokter');
Route::get('/antrian/{antrianId}', [AntrianController::class, 'antrianDetail'])->name('antrian');

Route::get('/riwayat/{userId}', [AntrianController::class, 'showRiwayat'])->name('riwayat');
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [SocialiteController::class, 'logout'])->name('logout');
});
