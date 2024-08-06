<?php

namespace Database\Seeders;

use App\Models\TipoEstatus;
use App\Models\TipoEstatusIniciativa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoEstatusiniciativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = json_decode(file_get_contents(base_path("database/catalogos/estatus_iniciativas.json")));
        foreach ($file as $item) {
            $arr = (array)$item;
            TipoEstatus::create($arr);
        }
    }
}
