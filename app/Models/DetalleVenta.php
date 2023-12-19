<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;

    protected $primaryKey = [
        'venta_id',
        'producto_id'
    ];

    protected $fillable = [
        'venta_id',
        'producto_id',
        'cantidad',
        'descuento',
        'subtotal'
    ];
}
