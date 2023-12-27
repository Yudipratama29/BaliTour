<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AktivitasController extends Controller
{
    public function index()
    {
        $aktivitas = DB::table('aktivitas')
        ->select("aktivitas.idakt", "aktivitas.name", "aktivitas.detail", "aktivitas.harga")
        ->get();

        return view('aktivitas.index', ['dataaktivitas' => $aktivitas]);
    }


    public function show($id)
    {
        $destination = DB::table('aktivitas')
        ->select("aktivitas.idakt", "aktivitas.name", "aktivitas.detail", "aktivitas.harga")
        ->first();

        return view('aktivitas.show', ['dataaktivitas' => $aktivitas]);
    }
}



