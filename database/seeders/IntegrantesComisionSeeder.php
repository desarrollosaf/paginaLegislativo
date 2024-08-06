<?php

namespace Database\Seeders;

use App\Models\Comision;
use App\Models\Diputado;
use App\Models\IntegranteComision;
use App\Models\IntegranteLegislatura;
use App\Models\Legislatura;
use App\Models\TipoCargoComision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntegrantesComisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $integrantes = DB::connection("legislatura")->table("cdd_integrantes_lxi")->get();
        $integrantes->each(function ($item) {
            $diputado = DB::connection("legislatura")
                ->table("cdd_diputados_lxi")
                ->find($item->id_diputado);
            $diputado = Diputado::where("apaterno", $diputado->apaterno)
                ->where("amaterno", $diputado->amaterno)
                ->where("nombres", $diputado->nombres)->first()->integranteLegislatura;
            if ($item->cargo == "") {
                $item->cargo = "Miembro";
            } elseif ($item->cargo == "Vicepresidenta") {
                $item->cargo = "Vicepresidente";
            } elseif ($item->cargo == "Secretaria") {
                $item->cargo = "Secretario";
            }
            $cargo = TipoCargoComision::where("valor", $item->cargo)->first();
            if (!$cargo) {
                dd($item->cargo);
            }
            $comision = DB::connection("legislatura")->table("cdd_comisiones")->where("id", $item->id_comision)->first();

            $comision = Comision::where("nombre", $comision->nombre)->first();
            IntegranteComision::create([
                "integrante_legislatura_id" => $diputado->id,
                "comision_id" => $comision->id,
                "tipo_cargo_comision_id" => $cargo->id,
            ]);
        });



//        $comision = DB::connection("legislatura")
//            ->table("cdd_comisiones")
//            ->where("nombre", "Directiva del Segundo Mes del Segundo Periodo Ordinario de Sesiones del Segundo Año de Ejercicio Constitucional")->first();
//        $integrantes = DB::connection("legislatura")
//            ->table("cdd_integrantes_lxi")
//            ->where("id_comision", $comision->id)->get();
//        $integrantes->each(function ($item) use ($comision) {
//            $diputado = DB::connection("legislatura")
//                ->table("cdd_diputados_lxi")
//                ->find($item->id_diputado);
//            $diputado = Diputado::where("apaterno", $diputado->apaterno)
//                ->where("amaterno", $diputado->amaterno)
//                ->where("nombres", $diputado->nombres)->first()->integranteLegislatura;
//            if ($item->cargo == "") {
//                $item->cargo = "Miembro";
//            } elseif ($item->cargo == "Vicepresidenta" || $item->cargo == "Vicepresidente") {
//                $item->cargo = "Vicepresidencia";
//            } elseif ($item->cargo == "Presidenta" || $item->cargo == "Presidente") {
//                $item->cargo = "Presidencia";
//            } elseif ($item->cargo == "Secretario") {
//                $item->cargo = "Secretaria";
//            }
//            $cargo = TipoCargoComision::where("valor", $item->cargo)->first();
//            if (!$cargo) {
//                dd($item->cargo);
//            }
//            $comision = Comision::where("nombre", "Directiva del Segundo Mes del Segundo Periodo Ordinario de Sesiones del Segundo Año de Ejercicio Constitucional")
//                ->first();
//            IntegranteComision::create([
//                "integrante_legislatura_id" => $diputado->id,
//                "comision_id" => $comision->id,
//                "tipo_cargo_comision_id" => $cargo->id,
//            ]);
//        });
    }
}
