<?php

namespace Database\Seeders;

use App\Models\Provcategoria;
use App\Models\Proveedore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class proveedoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria1 = Provcategoria::create([
            "nombre" => "BEBIDAS NO ALCOHOLICAS"
            
        ]);
       $proveedore1 = Proveedore::create([
        "nombre" => "Proveedor 1",
        "direccion" => "Direccion 1",
        "nit" => "123123123",
        "telefono" => "1123123",
        "activo" => 1,
        "provcategoria_id" => 1
       ]);

       $proveedore2 = Proveedore::create([
        "nombre" => "Proveedor 2",
        "direccion" => "Direccion 2",
        "nit" => "123123123",
        "telefono" => "1123123",
        "activo" => 1,
        "provcategoria_id" => 1
       ]);
    }
}
