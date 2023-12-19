<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create(['cantidad'=>'19826','precio'=>'15.00','descripcion'=>'Gasolina de 90','categoria_id'=>11,'proveedor_id'=>4]);
        Producto::create(['cantidad'=>'89272','precio'=>'14.99','descripcion'=>'Gasolina de 84','categoria_id'=>11,'proveedor_id'=>4]);
        Producto::create(['cantidad'=>'59826','precio'=>'13.99','descripcion'=>'Gasolina de 95','categoria_id'=>11,'proveedor_id'=>4]);
        Producto::create(['cantidad'=>'34566','precio'=>'13.45','descripcion'=>'Petroleo','categoria_id'=>10,'proveedor_id'=>1]);
    }
}
