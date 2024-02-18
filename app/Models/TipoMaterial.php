<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoMaterial extends Model
{
    use HasFactory;

    protected $fillable=['nombre'];

    public function mueble_mesadas(): HasMany{
        return $this->hasMany(MuebleMesada::class);
       }

}
