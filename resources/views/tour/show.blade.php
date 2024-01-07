@extends('layout.master')

@section('title', 'Details Destination')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/tour') }}">Tour</a></li>
    <li class="breadcrumb-item active">Show</li>
@endsection

@section('content')
    <div class="card">
        <style>
            .card{
                border: 1px;
                padding: 20px;
                margin: 20px;
                border-radius: 8px;
            }

        </style>
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Details Tour</h4>
            </div>
        </div>
        <div class="card-body">
            <p class="card-text">ID                  : {{$datatour->idtour}}</p>
            <p class="card-text">Tour Name           : {{$datatour->tourlist}}</p>
            <p class="card-text">Detail Tour         : {{$datatour->detailtour}}</p>
            <p class="card-text">Harga               : {{$datatour->harga}}</p>
        </div>
        <div class="card-body">
            <a class="btn btn-sm btn-danger" href="{{ url('/tour/') }}">Back</a>
            <a class="btn btn-sm btn-success" href="{{ url('/')}}">Home</a>
        </div>
    </div>
@endsection