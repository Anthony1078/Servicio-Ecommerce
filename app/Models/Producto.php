<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
    protected $table = 'producto';
    protected $primaryKey='idproducto';
    protected $fillable = ['categoriaid', 'codigo', 'nombre', 'descripcion', 'precio', 'stock', 'imagen', 'ruta', 'status'];
    protected $dates = ['datecreated'];
}
