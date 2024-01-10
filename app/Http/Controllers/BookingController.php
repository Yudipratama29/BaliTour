<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        // Simpan data booking ke database
        Booking::create($request->all());

        return redirect()->route('bookings.index')->with('success', 'Booking created successfully');
    }

    public function show($id)
    {
        // Tampilkan detail booking berdasarkan ID
        $booking = Booking::findOrFail($id);
        return view('book.show', compact('booking'));
    }

    public function edit($id)
    {
        // Tampilkan formulir pengeditan booking berdasarkan ID
        $booking = Booking::findOrFail($id);
        return view('book.edit', compact('booking'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari formulir pengeditan booking
        $request->validate([
            'booking_list' => 'required',
            'detail_booking' => 'required',
            'harga' => 'required|numeric',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Update data booking berdasarkan ID
        $booking = Booking::findOrFail($id);
        $booking->update($request->all());

        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully');
    }

    public function destroy($id)
    {
        // Hapus data booking berdasarkan ID
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully');
    }
}
