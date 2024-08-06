<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sesiones;
use App\Models\PeriodoSesion;
use App\Models\AnioSesion;
use App\Models\TipoSesion;
use App\Models\Legislatura;
use App\Models\RegimenSesion;
use Illuminate\Support\Facades\DB;

class ImportSesionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sesiones = DB::connection("legislatura")
            ->table("cdd_sesiones")->get();
//        dd($sesiones[0]);
        foreach ($sesiones as $item) {
            $legislatura = Legislatura::where("numero", "LXI")->first();

            if($item->tipo_sesion == 1){
                $tiposesion = TipoSesion::where("valor", "Sesion permanente")->first();
            }else{
                $tiposesion = TipoSesion::where("valor", "Sesión ordinaria")->first();
            }


            if($item->regimen == 1){
                $regimen = RegimenSesion::where("valor", "Deliberante")->first();
            }elseif($item->regimen == 2){
                $regimen = RegimenSesion::where("valor", "Solemne")->first();
            }elseif($item->regimen == 3){
                $regimen = RegimenSesion::where("valor", "Junta")->first();
            }elseif($item->regimen == 4){
                $regimen = RegimenSesion::where("valor", "Especial")->first();
            }elseif($item->regimen == 5){
                $regimen = RegimenSesion::where("valor", "Permanente")->first();
            }


            if($item->legis_year == 1){
                $anio = AnioSesion::where("valor", "Primer Año de Ejercicio Constitucional")->first();
            }elseif($item->legis_year == 2){
                $anio = AnioSesion::where("valor", "Segundo Año de Ejercicio Constitucional")->first();
            }elseif($item->legis_year == 3){
                $anio = AnioSesion::where("valor", "Tercer Año de Ejercicio Constitucional")->first();
            }

            if($item->periodo == 1){
                $periodo = PeriodoSesion::where("valor", "Primer periodo ordinario")->first();
            }elseif($item->periodo == 2){
                $periodo = PeriodoSesion::where("valor", "Segundo periodo ordinario")->first();
            }elseif($item->periodo == 3){
                $periodo = PeriodoSesion::where("valor", "Primer periodo de receso")->first();
            }elseif($item->periodo == 4){
                $periodo = PeriodoSesion::where("valor", "Segundo periodo de receso")->first();
            }elseif($item->periodo == 5){
                $periodo = PeriodoSesion::where("valor", "Extraordinario")->first();
            }

            $data = [
                "fecha" => $item->date,
                "sesion" => $item->sesion,
                "asamblea" => $item->asamblea,
                "tipo_sesion_id" => $tiposesion->id,
                "regimen_id" => $regimen->id,
                "anio_id" => $anio->id,
                "periodo_id" => $periodo->id,
                "legislatura_id" => $legislatura->id ,
            ];
            $sesiones = Sesiones::create($data);
//            dd($sesiones);
        }
    }
}
