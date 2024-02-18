<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{

   
    use HasFactory;

   protected $fillable=['titulo','autor','fechapub','genero','numeroPag'];

   public function cover(): HasOne{
    return $this->hasOne(Cover::class);
   }

   public function copies(): HasMany{
    return $this->hasMany(Copy::class);
   }

   public function partners(): HasMany{
    return $this->hasMany(Partner::class)
    ->withPivot('fecha_reserva','fecha_devolucion')
    ->withTimestamps();

   }




   
//    protected $table="libros"; // cambia el nombre de la tabla
//    protected $primarykey="key"; // cambia clave principal
//    public $timestamps= false; // no se recomienda su uso, con las migraciones habra que quitarlo
// protected $date= ['birthdate'];

    // si nuestra tabla se llama de otra manera private $table= 'libros';
    // HABRIA QUE INDICAR QUE TIENE UNA CLAVE PRIMARIA DISTINTA A UN ID AUTOINCREMENTAL CON BIGINTEGER
}
