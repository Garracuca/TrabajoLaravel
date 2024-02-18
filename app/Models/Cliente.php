<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable=['nombre','apellido'];

//has many cocinas
//has one instalador

public function cocinas(): HasMany{
    return $this->hasMany(Cocina::class)
    ->withPivot('fecha','cantidad')
    ->withTimestamps();

   }


   public function instalador(): HasOne{
    return $this->hasOne(Instalador::class);
   }


}
