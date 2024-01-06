<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = DB::table('tour')
        ->select("tour.idtour", "tour.tourlist", "tour.detailtour", "tour.harga")
        ->get();
        
        return view('tour.index', ['datatour' => $tours]);
    }
}
