<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\VillaController;
use App\Http\Controllers\BookingController;
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

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/tour', [TourController::class, 'index'])->name('tour.index');

Route::get('/aktivitas', 'AktivitasController@index')->name('aktivitas');

Route::get('/villa', 'VillaController@index')->name('villa');

Route::get('/booking', 'BookingController@index')->name('booking');