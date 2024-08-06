<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comunicado;
use App\Models\DescripcionesComunicado;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ImportComunicadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            1579,
            1580,
            1581,
            1582,
            1583,
            1584,
            1585,
            1586,
            1587,
            1588,
        ];
        $comunicados = DB::connection("legislatura")
            ->table("cdd_comunicados")->whereIn("comunicado", $array)->get();
        $total = 0;

        foreach ($comunicados as $key => $item) {
            $comunicado = Comunicado::where("comunicado", $item->comunicado)->first();
            if (!$comunicado) {
                $total++;
                $data = [
                    "fecha" => $item->fecha,
                    "comunicado" => $item->comunicado,
                    "titulo" => $item->titulo,
                    "texto" => $item->texto,
                    "deleted_at" => $item->deleted_at,
                ];
                $comunicado = Comunicado::create($data);

                if ($item->bullet1) {
                    $but = [
                        "bullets" => $item->bullet1,
                        "comunicado_id" => $comunicado->id,
                        "orden" => 1
                    ];
                    DescripcionesComunicado::create($but);
                }
                if ($item->bullet2) {
                    $but = [
                        "bullets" => $item->bullet2,
                        "comunicado_id" => $comunicado->id,
                        "orden" => 2
                    ];
                    DescripcionesComunicado::create($but);
                }
                if ($item->bullet3) {
                    $but = [
                        "bullets" => $item->bullet3,
                        "comunicado_id" => $comunicado->id,
                        "orden" => 3
                    ];
                    DescripcionesComunicado::create($but);
                }

                $fotos = DB::connection("legislatura")->table("cdd_fotos")->where("comunicado", $item->comunicado)->get();
                foreach ($fotos as $item) {
                    $comunicado->foto()->create([
                        "path" => "storage/img/fotos/comunicados/lxi/$item->foto"
                    ]);
                }
            }
        }
        dd($total);
    }
}
