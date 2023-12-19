<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = [
        'igv',
        'total',
        'estado',
        'fechaEmision',
        'fechaEntrega',
        'proveedor_id',
        'user_id'
    ];
    public $timestamps = false;
}
