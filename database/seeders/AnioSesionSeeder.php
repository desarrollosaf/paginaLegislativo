<?php

namespace Database\Seeders;

use App\Models\AnioSesion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnioSesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ["valor" => "Primer Año de Ejercicio Constitucional"],
            ["valor" => "Segundo Año de Ejercicio Constitucional"],
            ["valor" => "Tercer Año de Ejercicio Constitucional"]
        ];
        foreach ($params as $item) {
            AnioSesion::create($item);
        }
    }
}
