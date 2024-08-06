<?php

namespace Database\Seeders;

use App\Models\RegimenSesion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegimenSesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ["valor" => "Deliberante"],
            ["valor" => "Solemne"],
            ["valor" => "Junta"],
            ["valor" => "Especial"],
            ["valor" => "Permanente"]
        ];
        foreach ($params as $item) {
            RegimenSesion::create($item);
        }
    }
}
