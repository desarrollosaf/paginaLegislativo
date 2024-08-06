<?php

namespace Database\Seeders;

use App\Models\PeriodoSesion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodoSesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ["valor" => "Primer periodo ordinario"],
            ["valor" => "Segundo periodo ordinario"],
            ["valor" => "Primer periodo de receso "],
            ["valor" => "Segundo periodo de receso"],
            ["valor" => "Extraordinario"]
        ];
        foreach ($params as $item) {
            PeriodoSesion::create($item);
        }
    }
}
