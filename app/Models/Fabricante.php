<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fabricante extends Model
{
    use HasFactory;

    protected $fillable=['rs','direccion','telefono'];

    public function distribuidors(): HasMany{
        return $this->hasMany(Distribuidor::class)
        ->withTimestamps();
    
       }



 public function muebles(): HasMany{
        return $this->hasMany(Mueble::class)
        ->withTimestamps();
    
       }



}
