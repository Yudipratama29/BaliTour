<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VillaController extends Controller
{
    public function index()
    {
        $villa = DB::table('villa')
        ->select("villa.idvilla", "villa.name", "villa.detail", "villa.harga")
        ->get();

        return view('villa.index', ['datavilla' => $villa]);
    }
}
