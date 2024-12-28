<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable=["NombreArticulo","Precio","Seccion","Fecha","PaisOrigen"];
    use HasFactory;
}
