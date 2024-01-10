@extends('layout.master')

@section('title', 'Booking')

@section('breadcrumb')
    <li class="breadcrumb-item active">Booking</li>
@endsection

@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Booking</h4>
                </div>
                <div class="col-2 text-right">
                    <a href="{{ route('booking.create') }}" class="btn btn-primary">Create</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Booking</th>
                        <th scope="col">Booking List</th>
                        <th scope="col">Detail Booking</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->booking_list }}</td>
                            <td>{{ $booking->detail_booking }}</td>
                            <td>{{ $booking->harga }}</td>
                            <td>
                                <a href="{{ route('book.show', $booking->id) }}" class="btn btn-info">Show</a>
                                <a href="{{ route('book.edit', $booking->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('book.destroy', $booking->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
<div class="container card footer">
    <p>&copy; 2023 BaliTour. All rights reserved.</p>
</div>
@endsection
