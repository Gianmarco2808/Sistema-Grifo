<?php

namespace Database\Seeders;

use App\Models\Cargo;
use Illuminate\Database\Seeder;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cargo::create([
            'descripcioncargo' => 'Vendedor',
            'sueldo' => 998.00
        ]);

        Cargo::create([
            'descripcioncargo' => 'Administrador',
            'sueldo' => 2000.00
        ]);
        Cargo::create([
            'descripcioncargo' => 'Asistente de almacen',
            'sueldo' => 980.00
        ]);
        Cargo::create([
            'descripcioncargo' => 'Gerente Comercial',
            'sueldo' => 3000.00
        ]);
        Cargo::create([
            'descripcioncargo' => 'Contador',
            'sueldo' => 3500.00
        ]);
        Cargo::create([
            'descripcioncargo' => 'Supervisor',
            'sueldo' => 1200.00
        ]);
        Cargo::create([
            'descripcioncargo' => 'Sectretaria',
            'sueldo' => 1500.00
        ]);
        // Cargo::create([
        //     'descripcioncargo' => 'Usuario',
        //     'sueldo' => 3500.00
        // ]);
        Cargo::create([
            'descripcioncargo' => 'Administrador del sistema',
            'sueldo' => 2500.00
        ]);
    }
}
