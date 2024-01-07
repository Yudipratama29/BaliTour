<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index(request $request)
    {
        $datatour = Tour::with('tour')->get();

        return view('tour.index', ['tour' => $datatour]);
    }
}
