<?php

namespace Database\Seeders;

use App\Models\Legislatura;
use App\Models\OtrosAutores;
use App\Models\TipoAutor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddCatalogosAutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OtrosAutores::create([
            "valor" => "Organo Superior de Fiscalizacion del Estado de Mexico (OSFEM)"
        ]);
        TipoAutor::create([
            "valor" => "Legislatura", "model" => Legislatura::class,
        ]);
    }
}
