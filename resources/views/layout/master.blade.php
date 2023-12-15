<!-- master.blade.php -->
@extends('header')

@section('title', 'BaliTour')

@section('content')
    <div class="logo">
        <a href="{{ route('home') }}"><img src="path/to/your/logo.png" alt="BaliTour Logo"></a>
    </div>

    @include('nav-item')

    <div class="search-button">
        <button>Search</button>
    </div>
@endsection
