<?php

namespace Database\Seeders;

use App\Models\Comision;
use App\Models\TipoComision;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $comisiones = DB::connection("legislatura")->table("cdd_comisiones")->get();
////        $tipos = TipoComision::all();
//        $comisiones->each(function ($item) {
//            if ($item->tipo == "ordinaria") {
//                $tipos = TipoComision::where("valor", "Comisiones Legislativas")->first();
//                $tipo = $tipos->id;
//            } elseif ($item->tipo == "comite") {
//                $tipos = TipoComision::where("valor", "Comisiones Permanentes")->first();
//                $tipo = $tipos->id;
//            } else {
//                $tipos = TipoComision::where("valor", "!=", "Comisiones Permanentes")->where("valor", "!=", "Comisiones Legislativas")->first();
//                $tipo = $tipos->id;
//            }
//            $comision = Comision::create([
//                "nombre" => $item->nombre,
//                "tipo_comision_id" => $tipo,
//                "alias" => $item->alias,
//            ]);
//
//            $comision->foto()->create(["path" => $item->icon]);
//        });
        $comisiones = DB::connection("legislatura")->table("cdd_comisiones")
            ->where("nombre", "Directiva del Segundo Mes del Segundo Periodo Ordinario de Sesiones del Segundo Año de Ejercicio Constitucional")->get();
        //        $tipos = TipoComision::all();
        $comisiones->each(function ($item) {
            if ($item->tipo == "ordinaria") {
                $tipos = TipoComision::where("valor", "Comisiones Legislativas")->first();
                $tipo = $tipos->id;
            } elseif ($item->tipo == "comite") {
                $tipos = TipoComision::where("valor", "Comisiones Permanentes")->first();
                $tipo = $tipos->id;
            } else {
                $tipos = TipoComision::where("valor", "!=", "Comisiones Permanentes")->where("valor", "!=", "Comisiones Legislativas")->first();
                $tipo = $tipos->id;
            }
            $comision = Comision::create([
                "nombre" => $item->nombre,
                "tipo_comision_id" => $tipo,
                "alias" => $item->alias,
            ]);

            $comision->foto()->create(["path" => $item->icon]);
        });
    }
}
