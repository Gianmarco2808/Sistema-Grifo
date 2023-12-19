<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransporteCompra extends Model
{
    use HasFactory;

    protected $primaryKey = 'compra_id';

    protected $fillable = [
        'compra_id',
        'user_id'
    ];
    public $timestamps = false;
}
