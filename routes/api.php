<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DokterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('artikels', ArtikelController::class);

Route::get('/dokters', [DokterController::class, 'index']);
Route::get('/dokters/{id}', [DokterController::class, 'show']);
Route::post('/dokters', [DokterController::class, 'store']);
Route::put('/dokters/{id}', [DokterController::class, 'update']);
Route::delete('/dokters/{id}', [DokterController::class, 'destroy']);