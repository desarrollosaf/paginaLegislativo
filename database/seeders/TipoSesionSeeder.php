<?php

namespace Database\Seeders;

use App\Models\TipoSesion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ["valor" => "Sesión ordinaria"],
            ["valor" => "Sesion permanente"]
        ];
        foreach ($params as $item) {
            TipoSesion::create($item);
        }
    }
}
