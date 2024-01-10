<!-- resources/views/book/show.blade.php -->

@extends('layout.master')

@section('title', 'Booking Details')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('bookings.index') }}">Booking</a></li>
    <li class="breadcrumb-item active">Details</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Booking Details</h4>
        </div>
        <div class="card-body">
            <p><strong>ID Booking:</strong> {{ $booking->id }}</p>
            <p><strong>Booking List:</strong> {{ $booking->booking_list }}</p>
            <p><strong>Detail Booking:</strong> {{ $booking->detail_booking }}</p>
            <p><strong>Harga:</strong> {{ $booking->harga }}</p>
            <!-- Tampilkan informasi lainnya sesuai kebutuhan -->
        </div>
    </div>
@endsection
