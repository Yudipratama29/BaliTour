<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; // Add this line to import the Booking model

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('book.index', compact('bookings'));
    }

    public function create()
    {
        // Tampilkan formulir pembuatan booking
        return view('book.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir pembuatan booking
        $request->validate([
            'booking_list' => 'required',
            'detail_booking' => 'required',
            'harga' => 'required|numeric',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Rest of your code...
    }
}
