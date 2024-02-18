<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instalador extends Model
{
    use HasFactory;

    protected $fillable=['nombre','apellido'];


    //has many cocinas

    public function cocinas(): HasMany{
        return $this->hasMany(Cocina::class)
        ->withPivot('fecha','cantidad')
        ->withTimestamps();
    
       }

    // belong to cliente
    public function cliente(): BelongsTo{
        return $this->belongsTo(Cliente::class);
}

}
