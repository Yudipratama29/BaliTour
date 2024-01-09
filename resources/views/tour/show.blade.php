@extends('layout.master')

@section('title', 'Tour Detail')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tour Detail</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <strong>ID Tour:</strong> {{ $tour->id }}<br>
                    <strong>Tour List:</strong> {{ $tour->tour_list }}<br>
                    <strong>Detail Tour:</strong> {{ $tour->detail }}<br>
                    <strong>Harga:</strong> {{ $tour->harga }}<br>
                </div>
            </div>
        </div>
    </div>
    <div class="container card footer">
        <p>&copy; 2023 BaliTour. All rights reserved.</p>
    </div>
@endsection