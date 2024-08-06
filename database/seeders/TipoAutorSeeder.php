<?php

namespace Database\Seeders;

use App\Models\Comision;
use App\Models\Diputado;
use App\Models\Municipio;
use App\Models\Partido;
use App\Models\TipoAutor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoAutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ["valor" => "Comision", "model" => Comision::class],
            ["valor" => "Municipio", "model" => Municipio::class],
            ["valor" => "Partido", "model" => Partido::class],
            ["valor" => "Diputado (a)", "model" => Diputado::class],
        ];
        foreach ($params as $item) {
            TipoAutor::create($item);
        }
    }
}
