<?php

namespace Database\Seeders;

use App\Models\Diputado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiputadasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = json_decode(file_get_contents(base_path("database/catalogos/diputadas.json")));
        foreach ($file as $item) {
            $nombre = explode(" ", $item->nombre);
            $diputada = Diputado::where('nombres', 'like', "%" . $nombre[0] . "%")
                ->where('amaterno', 'like', "%" . $nombre[count($nombre) - 1] . "%")->first();
            if ($diputada) {
                $diputada->integranteLegislatura->diputada()->create([
                    "descripcion" => $item->descripcion
                ]);
            }
        }
    }
}
