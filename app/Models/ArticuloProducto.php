<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticuloProducto extends Model
{
     protected $fillable=["NombreArticulo","Precio","Marca","Descripcion","Stock_cantidad"];
    use HasFactory;
}
