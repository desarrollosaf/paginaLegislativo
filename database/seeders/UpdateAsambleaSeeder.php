<?php

namespace Database\Seeders;

use App\Models\Sesiones;
use App\Models\TipoAsamblea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpdateAsambleaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Sesiones::all();
        $data->each(function ($item) {
            $asamblea = $item->asamblea;
            $asamblea = TipoAsamblea::where("valor", "LIKE", "%" . $asamblea . "%")->first();
            if (!$asamblea) {
                dd($item->asamblea);
            }
            $item->tipo_asamblea_id = $asamblea->id;
            $item->save();
        });
    }
}
