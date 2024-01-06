@extends('layout.master')

@section('title', 'Tour')

@section('breadcrumb')
    <li class="breadcrumb-item active">Tour</li>
@endsection

@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Tour</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Tour</th>
                        <th scope="col">Tour List</th>
                        <th scope="col">Detail Tour</th>
                        <th scope="col">Harga</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datatour as $d)
                    <tr>
                        <td>{{ $d->idtour }}</td>
                        <td>{{ $d->tourlist }}</td>
                        <td>{{ $d->detailtour }}</td>
                        <td>{{ $d->harga }}</td>
                        <td class="float-end">
                            <a class=btn btn-sm btn-success" href="{{ url('/tour/show' . $d->idtour ) }}">Show</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
<div class="container card footer">
    <p>&copy; 2023 BaliTour. All rights reserved.</p>
</div>
@endsection

