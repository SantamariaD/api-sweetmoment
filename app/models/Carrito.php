<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $table = 'carritos';
    protected $fillable = [
      'id_usuario', 'total', 'descuento', 'pagado'
    ];
}
