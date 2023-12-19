<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['dni' => '74857326','name' => 'Administrador','estado' => 'ACTIVO','direccion' =>'Chepén','genero' =>'M','fechanacimiento' =>'2001-01-10','apellidos' =>'@admin','telefono'=>'937382734','email'=>'admin@gmail.com','password'=>bcrypt('password'),'cargo_id'=>'2']);
        User::create(['dni' => '37485726','name' => 'Peter','estado' => 'ACTIVO','direccion' =>'Guadalupe','genero' =>'M','fechanacimiento' =>'2000-03-05','apellidos' =>'Parker','telefono'=>'933321734','email'=>'vendedor@gmail.com','password'=>bcrypt('usuario'),'cargo_id'=>'1']);

    }
}
