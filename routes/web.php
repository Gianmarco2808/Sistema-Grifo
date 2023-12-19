<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\VentaController;
use App\Models\Cliente;
use App\Http\Controllers\TipoPagoController;
use App\Models\TipoPago;
use App\Models\Venta;
use Database\Seeders\VendedorSeeder;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[VentaController::class, 'dashboard'])->name('dashboard');

Route::resource('cliente', ClienteController::class);
Route::resource('producto', ProductoController::class);
Route::resource('venta', VentaController::class);
Route::resource('vendedor', VendedorController::class);
Route::resource('categoria',CategoriaController::class);
Route::resource('TipoPago',TipoPagoController::class);
Route::resource('Cargo',CargoController::class);
Route::get('deletevendedor/{id}', [VendedorController::class, 'inhabilitar'])->name('inhabilitar');
Route::get('contactos', [VentaController::class, 'contactos'])->name('contactos');

