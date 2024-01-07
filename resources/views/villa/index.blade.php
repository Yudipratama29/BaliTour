@extends('layout.master')

@section('title', 'Villa')

@section('breadcrumb')
    <li class="breadcrumb-item active">Villa</li>
@endsection

@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Villa</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Villa</th>
                        <th scope="col">Villa List</th>
                        <th scope="col">Detail Villa</th>
                        <th scope="col">Harga</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                @foreach ($datavilla as $d)
                    <tr>
                        <td>{{ $d->idvilla }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->detail }}</td>
                        <td>{{ $d->harga }}</td>
                        <td class="float-end">
                            <a class="btn btn-sm btn-success" href="{{ url('aktivitas/show')}}">Show</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
<div class="container card footer">
    <p>&copy; 2023 BaliTour. All rights reserved.</p>
</div>
@endsection

