<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings'; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['booking_list', 'detail_booking', 'harga']; // Sesuaikan dengan kolom yang dapat diisi

    use HasFactory;
}