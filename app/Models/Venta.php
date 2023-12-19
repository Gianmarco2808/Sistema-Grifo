<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha',
        'igv',
        'total',
        'estado',
        'cliente_id',
        'user_id',
        'tipo_id'
    ];

    public $timestamps = false;
}
