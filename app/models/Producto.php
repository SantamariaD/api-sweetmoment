<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = [
      'id_carrito', 'nombre', 'descuento', 'precio', 'cantidad', 'descripcion'
    ];
}
