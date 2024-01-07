@extends('layout.master')

@section('title', 'Details Villa')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/villa') }}">Villa</a></li>
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
                <h4 class="card-title">Details Villa</h4>
            </div>
        </div>
        <div class="card-body">
            <p class="card-text">ID                  : {{$datavilla->idvilla}}</p>
            <p class="card-text">Nama Aktivitas      : {{$datavilla->name}}</p>
            <p class="card-text">Detail              : {{$datavilla->detail}}</p>
            <p class="card-text">Harga               : {{$datavilla->harga}}</p>
        </div>
        <div class="card-body">
            <a class="btn btn-sm btn-danger" href="{{ url('/aktivitas/') }}">Back</a>
            <a class="btn btn-sm btn-success" href="{{ url('/')}}">Home</a>
        </div>
    </div>
@endsection