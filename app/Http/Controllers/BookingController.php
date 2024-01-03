<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $book = DB::table('book')
        ->select("book.idbook", "book.name", "book.detail", "book.harga")
        ->get();

        return view('book.index', ['databook' => $book]);
    }
}
