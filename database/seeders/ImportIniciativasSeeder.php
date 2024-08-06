<?php

namespace Database\Seeders;

use App\Models\Iniciativa;
use App\Models\TipoCategoriaIniciativa;
use App\Models\TipoEstatus;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImportIniciativasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $iniciativas = DB::connection("legislatura")
            ->table("cdd_iniciativas")->where("folio", "!=", 0)->get();
        foreach ($iniciativas as $item) {
            $categoria = TipoCategoriaIniciativa::where("valor", $item->categoria)->first();
            $created = Iniciativa::where("folio", $item->folio)->where("categoria_id", $categoria->id)->first();
            if (!$created) {
                $data = [
                    "folio" => $item->folio,
                    "categoria_id" => $categoria->id,
                    "iniciativa" => $item->iniciativa,
                    "fecha_presentacion" => Carbon::createFromFormat("Y-m-d", $item->presentada)->format("Y-m-d"),
                    "fecha_expedicion" => Carbon::createFromFormat("Y-m-d", $item->presentada)->format("Y-m-d"),
                ];
                $iniciativa = Iniciativa::create($data);
                $tipo = TipoEstatus::where("valor", $item->status)->first();
                if (!$tipo) {
                    $tipo = TipoEstatus::where("valor", "En estudio")->first();
                }
                $iniciativa->estatus()->create([
                    "tipo_estatus_id" => $tipo->id,
                    "fecha" => Carbon::now()->format("Y-m-d")
                ]);
            }
        }
    }
}
