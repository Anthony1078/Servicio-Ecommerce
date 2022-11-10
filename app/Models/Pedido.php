<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $primaryKey='idpedido';
    protected $fillable = ['referenciacobro', 'idtransaccionpaypal', 'datospaypal', 'personaid', 'costo_envio', 'monto', 'tipopagoid', 'direccion_envio', 'status'];
    protected $dates = ['fecha'];
}
