<?php

namespace Database\Seeders;

use App\Models\NivelAutor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NivelAutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ["valor" => "Autor"],
            ["valor" => "Coautor"],
        ];
        foreach ($params as $item) {
            NivelAutor::create($item);
        }
    }
}
