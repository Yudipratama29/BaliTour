@extends('layout.master')

@section('title', 'Villa Detail')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Villa Detail</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <strong>ID Villa:</strong> {{ $villa->id }}<br>
                    <strong>Villa Name:</strong> {{ $villa->villa_name }}<br>
                    <strong>Villa Description:</strong> {{ $villa->villa_description }}<br>
                    <strong>Price:</strong> {{ $villa->villa_price }}<br>
                </div>
            </div>
        </div>
    </div>
    <div class="container card footer">
        <p>&copy; 2023 BaliTour. All rights reserved.</p>
    </div>
@endsection
