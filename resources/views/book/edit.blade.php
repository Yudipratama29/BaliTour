<!-- resources/views/book/edit.blade.php -->

@extends('layout.master')

@section('title', 'Edit Booking')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('bookings.index') }}">Booking</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Booking</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="booking_list">Booking List</label>
                    <input type="text" name="booking_list" class="form-control" value="{{ $booking->booking_list }}" required>
                </div>
                <div class="form-group">
                    <label for="detail_booking">Detail Booking</label>
                    <textarea name="detail_booking" class="form-control" required>{{ $booking->detail_booking }}</textarea>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" class="form-control" value="{{ $booking->harga }}" required>
                </div>
                <!-- Tambahkan input lainnya sesuai kebutuhan -->
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
