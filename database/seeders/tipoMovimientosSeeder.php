<?php

namespace Database\Seeders;

use App\Models\Tipomovimiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipoMovimientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoMovimiento1 = new Tipomovimiento();
        $tipoMovimiento1->nombre = "ENTRADA";
        $tipoMovimiento1->save();

        $tipoMovimiento2 = new Tipomovimiento();
        $tipoMovimiento2->nombre = "SALIDA";
        $tipoMovimiento2->save();
    }
}
