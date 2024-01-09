@extends('layout.master')

@section('title', 'Aktivitas Detail')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Aktivitas Detail</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <strong>ID Aktivitas:</strong> {{ $aktivitas->id }}<br>
                    <strong>Aktivitas Name:</strong> {{ $aktivitas->aktivitas_name }}<br>
                    <strong>Deskripsi Aktivitas:</strong> {{ $aktivitas->aktivitas_description }}<br>
                    <strong>Harga:</strong> {{ $aktivitas->aktivitas_price }}<br>
                </div>
            </div>
        </div>
    </div>
    <div class="container card footer">
        <p>&copy; 2023 BaliTour. All rights reserved.</p>
    </div>
@endsection
