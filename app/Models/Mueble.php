<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mueble extends Model
{
    use HasFactory;

    public function cocina(): BelongsTo
    {
        return $this->belongsTo(Cocina::class);
    }
    public function fabricante(): BelongsTo
    {
        return $this->belongsTo(Fabricante::class);
    }

    public function muebleAlto()
    {
        return $this->hasOne(MuebleAlto::class);
    }

    public function muebleBajo()
    {
        return $this->hasOne(MuebleBajo::class);
    }

    public function mueblePanel()
    {
        return $this->hasOne(MueblePanel::class);
    }

    public function MuebleMesada()
    {
        return $this->hasOne(MuebleMesada::class);
    }
}
