<?php

namespace App\Http\Controllers;

use App\Models\TipoPago;
use Illuminate\Http\Request;

class TipoPagoController extends Controller
{
    public function index()
    {
        $TipoPago=TipoPago::all();
        return view('TipoPago.index',compact('TipoPago'));
    }
}
