<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Distribuidor extends Model
{
    use HasFactory;

    public function fabricantes(): HasMany{
        return $this->hasMany(Fabricante::class)
        ->withTimestamps();
    
       }

}
