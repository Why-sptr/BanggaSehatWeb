<?php

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

Route::get('/', function () {
    return view('homepage');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/cek-kesehatan', function () {
    return view('cek-kesehatan');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/rs-terdekat', function () {
    return view('rs-terdekat');
});
Route::get('/detail-blog', function () {
    return view('detail-blog');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/profile', function () {
    return view('booking-dokter');
});
Route::get('/profile', function () {
    return view('bmi');
});
Route::get('/booking-detail', function () {
    return view('booking-detail');
});
Route::get('/booking-dokter', function () {
    return view('booking-dokter');
});
Route::get('/riwayat', function () {
    return view('riwayat');
});
Route::get('/antrian', function () {
    return view('antrian');
});
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
