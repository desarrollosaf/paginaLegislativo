<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Banner;
use App\Models\Comision;
use App\Models\Comunicado;
use App\Models\Iniciativa;
use App\Models\IntegranteComision;
use App\Models\IntegranteLegislatura;
use App\Models\Sesiones;
use App\Models\TipoCargoComision;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Diputado;


class InformeLaboresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = IntegranteLegislatura::with(["autorcomunicado" => function ($q) {
            $q->whereHas("comunicado");
        }])->whereId($id)->first();
        $anfitrion = $this->getAgenda($data);
        $data = $data->diputado;
        $partido = $data->integranteLegislatura->partido->siglas;



        return view("pages.informe.show", compact("data", "partido"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getAgenda($diputado)
    {
        $data = [];
        $data[] = $diputado->partido->id;
        if (!is_null($diputado->distrito->municipio_id)) {
            $data[] = $diputado->distrito->municipio_id;
        }
        foreach ($diputado->comisiones as $item) {
            $data[] = $item->comision_id;
        }
        $data[] = $diputado->legislatura->id;
        return $data;
    }

    public function mostrarNombre($parametro)
    {

        $parametro = strtoupper($parametro);
        $diputado = Diputado::all();
        $id = null;
        $parametroSinAcento = iconv('UTF-8', 'ASCII//TRANSLIT', $parametro);
        $parametroDip = strtoupper($parametroSinAcento);

        foreach($diputado as $user) {
            $nombre = $user->full_name;
            $cadenaSinAcentos = iconv('UTF-8', 'ASCII//TRANSLIT', $nombre);
            $nombredip = strtoupper($cadenaSinAcentos);
            $nombredip = str_replace(' ', '', $nombredip);
            //echo $nombredip;
            if($nombredip == $parametroDip){
                $id = $user->integranteLegislatura->id;
                break;
            }
        }
        //dd($parametroDip);
        if($id != null){
            $data = IntegranteLegislatura::with(["autorcomunicado" => function ($q) {
                $q->whereHas("comunicado");
            }])->whereId($id)->first();
            //dd($data);
            $anfitrion = $this->getAgenda($data);
            $data = $data->diputado;
            $partido = $data->integranteLegislatura->partido->siglas;

        }else{
            return redirect()->route("diputadasydiputados.index");
        }


        return view("pages.informe.show", compact("data", "partido"));
    }

    public function prueba()
    {
        $comunicados = Comunicado::where('publicado',0)->orderBy("comunicado", "DESC")->with(["foto" => function ($q) {
            $q->orderBy('path', 'asc');
        }])->take(9)->get();
        $comisionGeneral = Comision::where("nombre", "Junta de Coordinación Política (Jucopo)")->first();
        $cargo = TipoCargoComision::where("valor", "Presidencia")->first();
//        $dip = IntegranteComision::where("comision_id", $comisionGeneral->id)
//            ->where("tipo_cargo_comision_id", $cargo->id)->first();


        $dip = IntegranteComision::orderByRaw("RAND()")->first();
//        dd($dip);

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


        $banners = Banner::orderBy("orden", "asc")->get();
        $sesion = Sesiones::orderBy("sesion", "desc")->first();

        return view("pages.indexprueba", compact("comunicados", "dip", "actividadReciente", "actividadProxima", "iniciativa", "comunicado", "actRecientes", "actProxima", "sesion","banners", "transmision"));
//        return view("errors.503");

    }
    public function reconocimiento()
    {
//        dd("hola");
        return view("pages.convocatorias.reconocimiento");
    }
    public function Leymovilidad()
    {
        return view("pages.convocatorias.movilidad");
    }
    public function LeyMovilida()
    {
        return view("pages.convocatorias.leymovilidad");
    }
    public function meritodocente2024()
    {
        return view("pages.convocatorias.meritodocente2024");
    }
}
