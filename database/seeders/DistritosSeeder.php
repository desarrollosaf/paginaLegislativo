<?php

namespace Database\Seeders;

use App\Models\Distrito;
use App\Models\Municipio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistritosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $distritos = DB::connection("legislatura")->table("cdd_distritos")->where("distrito", "!=", "plurinom")->get();
        for ($i = 0; $i < count($distritos); $i++) {
            $municipio = Municipio::where("municipio", $distritos[$i]->municipio)->orWhere("cabecera", $distritos[$i]->municipio)->first();
            $params = [
                "distrito" => $distritos[$i]->distrito,
                "orden" => $i + 1
            ];
            if ($municipio) {
                $params["municipio_id"] = $municipio->id;
            }
            Distrito::create($params);
        }
        Distrito::create([
            "distrito" => "Plurinominal",
            "orden" => 2000
        ]);

    }
}
