<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use Illuminate\Http\Request;

class AktivitasController extends Controller
{
    public function index()
    {
        $aktivitasList = Aktivitas::all();
        return view('aktivitas.index', compact('aktivitasList'));
    }

    public function show($id)
    {
        $aktivitas = Aktivitas::find($id);
        return view('aktivitas.show', compact('aktivitas'));
    }
}



