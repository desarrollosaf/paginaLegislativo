<?php

namespace Database\Seeders;

use App\Models\TipoCategoriaIniciativa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ["valor" => "Punto de acuerdo"],
            ["valor" => "Iniciativa"]
        ];
        foreach ($params as $item) {
            TipoCategoriaIniciativa::create($item);
        }
    }
}
