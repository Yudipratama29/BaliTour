<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tour extends Model
{
    use HasFactory;

    protected $table = 'tours';

    public function tour() : BelongsTo
    {
        return $this->BelongsTo(tour::class, 'idtour', 'id');
    }
}
