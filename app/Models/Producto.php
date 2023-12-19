<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad',
        'precio',
        'descripcion',
        'categoria_id',
        'proveedor_id'
    ];

    public $timestamps = false;
}
