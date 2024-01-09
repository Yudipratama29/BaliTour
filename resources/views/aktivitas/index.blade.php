@extends('layout.master')

@section('title', 'Aktivitas')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-center">List of Aktivitas</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Aktivitas Name</th>
                        <th>Deskripsi Aktivitas</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($aktivitasList as $item)
                    <tr class="align-middle">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->aktivitas_name }}</td>
                        <td>{{ Str::limit($item->aktivitas_description, 200) }}</td>
                        <td>{{ $item->aktivitas_price }}</td>
                        <td>
                            <a href="{{ route('aktivitas.show', ['id' => $item->id]) }}" class="btn btn-primary">Details</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No Aktivitas available.</td>
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