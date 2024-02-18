<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MuebleMesada extends Model
{
    use HasFactory;

    public function mueble(): BelongsTo
    {
        return $this->belongsTo(Mueble::class);
    }

    public function tipo_material(): BelongsTo
    {
        return $this->belongsTo(TipoMaterial::class);
    }
}
