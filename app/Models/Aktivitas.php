<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    protected $table = 'aktivitas'; // Sesuaikan dengan nama tabel yang benar
    protected $primaryKey = 'id'; // Sesuaikan dengan nama kolom primary key yang benar

    // Kolom-kolom yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'aktivitas_name', // Sesuaikan dengan nama kolom yang benar
        'aktivitas_description', // Sesuaikan dengan nama kolom yang benar
        'aktivitas_price', // Sesuaikan dengan nama kolom yang benar
        // ... tambahkan kolom-kolom lain yang sesuai
    ];

    use HasFactory;
}
