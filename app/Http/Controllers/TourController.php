<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        return view('tour.index', compact('tours'));
    }

    public function show($id)
    {
        // Ambil data tour berdasarkan ID
        $tour = Tour::find($id);

        // Periksa apakah tour ditemukan
        if (!$tour) {
            // Jika tidak ditemukan, redirect atau tampilkan pesan kesalahan
            // Sesuaikan sesuai kebutuhan aplikasi Anda
            return redirect()->route('tour.index')->with('error', 'Tour not found');
        }

        // Tampilkan halaman detail tour
        return view('tour.show', compact('tour'));
    }
}