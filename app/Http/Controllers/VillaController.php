<?php

namespace App\Http\Controllers;

use App\Models\Villa;
use Illuminate\Http\Request;

class VillaController extends Controller
{
    public function index()
    {
        $villas = Villa::all();
        return view('villa.index', compact('villas'));
    }

    public function show($id)
    {
        $villa = Villa::find($id);
        return view('villa.show', compact('villa'));
    }
}