<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{
    protected $table = 'villa';
    protected $primaryKey = 'id';

    protected $fillable = [
        'villa_name',
        'villa_description',
        'villa_price',
        // tambahkan kolom-kolom lain yang sesuai
    ];

    use HasFactory;
}
