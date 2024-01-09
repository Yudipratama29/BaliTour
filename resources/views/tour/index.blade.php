@extends('layout.master')

@section('title', 'Tour')

@section('breadcrumb')
    <li class="breadcrumb-item active">Tour</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <h4 class="card-title text-center">List of Tours</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tour List</th>
                        <th>Detail Tour</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tours as $tour)
                        <tr class="align-middle">
                            <td>{{ $tour->id }}</td>
                            <td>{{ $tour->tour_list }}</td>
                            <td>{{ Str::limit($tour->detail, 200) }}</td>
                            <td>{{ $tour->harga }}</td>
                            <td>
                                <a href="{{ route('tour.show', ['id' => $tour->id]) }}" class="btn btn-primary">Details</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No tours available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="container card footer text-center">
        <p>&copy; 2023 BaliTour. All rights reserved.</p>
    </div>
@endsection