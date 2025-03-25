<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaihanController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TrendingController;

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

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman Tempat Makan oleh Raihan
Route::get('/places', [RaihanController::class, 'index']);

// Halaman Event Kuliner oleh shifa
Route::get('/events', [EventController::class, 'index']);

// Halaman Trending oleh Charlie
Route::get('/trending', [TrendingController::class, 'index']);

use App\Http\Controllers\ListBarangController;

Route::get('/barang', [ListBarangController::class, 'tampilkan']);

