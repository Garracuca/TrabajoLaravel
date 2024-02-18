<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MuebleBajo extends Model
{
    use HasFactory;

    protected $fillable=['altura','cantCajones'];

    public function mueble(): BelongsTo
    {
        return $this->belongsTo(Mueble::class);
    }
}
