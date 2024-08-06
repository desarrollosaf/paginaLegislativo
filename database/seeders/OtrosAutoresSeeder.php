<?php

namespace Database\Seeders;

use App\Models\OtrosAutores;
use App\Models\TipoAutor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OtrosAutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoAutor::create([
            "valor" => "Otros", "model" => OtrosAutores::class,
        ]);
        $file = json_decode(file_get_contents(base_path("database/catalogos/otros-autores.json")));
        foreach ($file as $item) {
            $arr = (array)$item;
            OtrosAutores::create($arr);
        }
    }
}
