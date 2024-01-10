<!-- resources/views/book/create.blade.php -->

@extends('layout.master')

@section('title', 'Create Booking')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('bookings.index') }}">Booking</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Create Booking</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('bookings.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="booking_list">Booking List</label>
                    <input type="text" name="booking_list" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="detail_booking">Detail Booking</label>
                    <textarea name="detail_booking" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" class="form-control" required>
                </div>
                <!-- Tambahkan input lainnya sesuai kebutuhan -->
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
