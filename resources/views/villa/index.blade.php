@extends('layout.master')

@section('title', 'Villa')

@section('breadcrumb')
    <li class="breadcrumb-item active">Villa</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <h4 class="card-title text-center">List of Villas</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Villa Name</th>
                        <th>Villa Description</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($villas as $villa)
                        <tr class="align-middle">
                            <td>{{ $villa->id }}</td>
                            <td>{{ $villa->villa_name }}</td>
                            <td>{{ Str::limit($villa->villa_description, 200) }}</td>
                            <td>{{ $villa->villa_price }}</td>
                            <td>
                                <a href="{{ route('villa.show', ['id' => $villa->id]) }}" class="btn btn-primary">Details</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No villas available.</td>
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

