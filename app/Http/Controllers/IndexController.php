<?php

namespace App\Http\Controllers;

use App\Models\IntegranteLegislatura;
use App\Models\Legislatura;
use Illuminate\Http\Request;
use App\Models\Comunicado;
use App\Models\Comision;
use App\Models\TipoCargoComision;
use App\Models\IntegranteComision;
use App\Models\Agenda;
use App\Models\Sesiones;
use Carbon\Carbon;
use App\Models\Iniciativa;
use App\Models\Banner;

class IndexController extends Controller
{
    public function index()
    {
//        $comunicados = Comunicado::where('publicado',0)->orderByRaw('comunicado+0 desc')->get();
        $comunicados = Comunicado::where('publicado',0)->orderByRaw('comunicado+0 desc')->with(["foto" => function ($q) {
            $q->orderBy('path', 'asc');
        }])->take(9)->get();
        $comisionGeneral = Comision::where("nombre", "Junta de Coordinación Política (Jucopo)")->first();
        $cargo = TipoCargoComision::where("valor", "Presidencia")->first();
//        $dip = IntegranteComision::where("comision_id", $comisionGeneral->id)
//            ->where("tipo_cargo_comision_id", $cargo->id)->first();

        $existen = IntegranteLegislatura::select('id');

        $dip = IntegranteComision::whereIn('integrante_legislatura_id', $existen)->orderByRaw("RAND()")->first();
//        dd($dip->integranteLegislatura->diputado);

        $id = $dip->integranteLegislatura->id;


        $date = Carbon::now();
        $anfitrion = (new DiputadosController)->getAgenda($dip->integranteLegislatura);
        $date = Carbon::now();
        $actividadReciente = Agenda::where("fecha_hora", "<", $date)
            ->whereHas("anfitrion", function ($q) use ($anfitrion) {
                $q->whereIn("autor_id", $anfitrion);
            })->orderBy("fecha_hora", "DESC")
            ->first();
        $actividadProxima = Agenda::where("fecha_hora", ">", $date)
            ->whereHas("anfitrion", function ($q) use ($anfitrion) {
                $q->whereIn("autor_id", $anfitrion);
            })->orderBy("fecha_hora", "DESC")
            ->first();

        $iniciativa = Iniciativa::whereHas("autor", function ($q) use ($id) {
            $q->where("autor_id", $id);
        })->first();

        $comunicado = Comunicado::whereHas("autor", function ($q) use ($id) {
            $q->where("autor_id", $id);
        })->first();

        $actRecientes = Agenda::where("fecha_hora", "<", $date)
            ->orderBy("fecha_hora", "DESC")
            ->take(2)->get();

        $actProxima = Agenda::where("fecha_hora", ">", $date)
            ->orderBy("fecha_hora", "DESC")
            ->take(3)->get();
//        dd($actProxima);
        $transmision = Agenda::where("transmision", 1)->where("fecha_hora", "<", $date)->orderBy("fecha_hora", "DESC")->first();

//        dd($transmision);


        $banners = Banner::orderBy("orden", "asc")->get();
        $sesion = Sesiones::orderBy("sesion", "desc")->first();

        return view("pages.index", compact("comunicados", "dip", "actividadReciente", "actividadProxima", "iniciativa", "comunicado", "actRecientes", "actProxima", "sesion","banners", "transmision"));
//        return view("errors.503");
    }

    public function error(){
                return view("errors.503");
    }
}
