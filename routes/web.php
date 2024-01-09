<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\VillaController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/tour', [TourController::class, 'index'])->name('tour.index');
    Route::get('/tour/{id}', [TourController::class, 'show'])->name('tour.show');

    Route::get('/aktivitas', [AktivitasController::class, 'index'])->name('aktivitas.index');
    Route::get('/aktivitas/{id}', [AktivitasController::class, 'show'])->name('aktivitas.show');


    Route::get('/villa', [VillaController::class, 'index'])->name('villa.index');
    Route::get('/villa/{id}', [VillaController::class, 'show'])->name('villa.show');
    

    Route::get('/book', function () {
        return view('book.index');
    })->name('book');

});