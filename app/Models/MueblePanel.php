<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MueblePanel extends Model
{
    use HasFactory;

    public function mueble(): BelongsTo
    {
        return $this->belongsTo(Mueble::class);
    }
    

}
