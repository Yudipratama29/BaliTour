<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\VillaController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LoginController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/home', [HomeController::class, 'index']);
Route::middleware(['auth'])->group(function () {

    Route::get('/home', function () {
        return view('home.index');
    })->name('home');

    Route::get('/tour', function () {
        return view('tour.index');
    })->name('tour');

    Route::get('/aktivitas', function () {
        return view('aktivitas.index');
    })->name('aktivitias');

    Route::get('/villa', function () {
        return view('villa.index');
    })->name('villa');

    Route::get('/book', function () {
        return view('book.index');
    })->name('book');

});