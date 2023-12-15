<!DOCTYPE html>

@extends('layout.master')

<html>
<head>
    <title>BaliTour</title>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 40%;
            float: left;
            margin: 2%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
            padding: 2px 16px;
        }
    </style>
</head>
<body>

    <img src="logo_anda.jpg" alt="Logo" class="float-left" style="width: 50px; height: auto;">

    @foreach($tours as $tour)
    <div class="card">
        <img src="{{ $tour->foto }}" alt="{{ $tour->nama }}" style="width:100%">
        <div class="container">
            <h4><b>{{ $tour->nama }}</b></h4>
            <p>{{ substr($tour->deskripsi, 0, 50) }}...</p>
            <p>Harga: Rp. {{ number_format($tour->harga) }}</p>
        </div>
    </div>
    @endforeach

    <div class="footer">
        <p>&copy; 2023 BaliTour. All rights reserved.</p>
    </div>

</body>
</html>