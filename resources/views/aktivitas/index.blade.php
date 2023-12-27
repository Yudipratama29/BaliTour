@extends('layout.master')

@section('title', 'Aktivitas')

@section('breadcrumb')
    <li class="breadcrumb-item active">Aktivitas</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Aktivitas</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Aktivitas</th>
                        <th scope="col">Aktivitas List</th>
                        <th scope="col">Detail Aktivitas</th>
                        <th scope="col">Harga</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataaktivitas as $d)
                        <tr>
                            <td>{{ $d->idakt }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->detail }}</td>
                            <td>{{ $d->harga }}</td>
                            <td class="float-end">
                                <a class="btn btn-sm btn-success" href="{{ url('/destination/show' . $d->iddst ) }}">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
