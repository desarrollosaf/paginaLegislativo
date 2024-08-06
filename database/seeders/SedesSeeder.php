<?php

namespace Database\Seeders;

use App\Models\Sede;
use Illuminate\Database\Seeder;

class SedesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = json_decode(file_get_contents(base_path("database/catalogos/sedes.json")));
        foreach ($file as $item) {
            $arr = (array)$item;
            Sede::create($arr);
        }
    }
}
