<?php

namespace Database\Seeders;

use App\Models\TipoAsamblea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoAsambleaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = json_decode(file_get_contents(base_path("database/catalogos/tipo_asambleas.json")));
        foreach ($file as $item) {
            $arr = (array)$item;
            TipoAsamblea::create($arr);
        }
    }
}
