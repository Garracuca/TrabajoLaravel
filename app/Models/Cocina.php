<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cocina extends Model
{
    use HasFactory;

    protected $fillable=['nombre'];


    //belongs to cliente
    public function cliente(): BelongsTo{
        return $this->belongsTo(Cliente::class);
}


    //belongs to instalador

    public function instalador(): BelongsTo{
        return $this->belongsTo(Instalador::class);
}

//has many muebles
public function muebles(): HasMany{
    return $this->hasMany(Mueble::class);
   }



}
