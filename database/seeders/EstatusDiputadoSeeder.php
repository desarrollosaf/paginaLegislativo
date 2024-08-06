<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EstatusDiputado;

class EstatusDiputadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstatusDiputado::create([
            "valor" => "Inactivo"
        ]);
        EstatusDiputado::create([
            "valor" => "Activo"
        ]);
        EstatusDiputado::create([
            "valor" => "Licencia"
        ]);
    }
}
