<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours'; // Sesuaikan dengan nama tabel yang benar
    protected $primaryKey = 'id'; // Sesuaikan dengan nama kolom primary key yang benar

    // Kolom-kolom yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'tour_list', // Sesuaikan dengan nama kolom yang benar
        'detail', // Sesuaikan dengan nama kolom yang benar
        'harga', // Sesuaikan dengan nama kolom yang benar
        // ... tambahkan kolom-kolom lain yang sesuai
    ];

    use HasFactory;
}
