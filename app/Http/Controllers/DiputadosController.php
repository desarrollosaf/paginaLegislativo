<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\AnfitrionAgenda;
use App\Models\Comision;
use App\Models\Diputado;
use App\Models\Gender;
use App\Models\Genero;
use App\Models\IntegranteComision;
use App\Models\IntegranteLegislatura;
use App\Models\Legislatura;
use App\Models\Partido;
use App\Models\TipoAutor;
use App\Models\TipoCargoComision;
use App\Models\TipoComision;
use Carbon\Carbon;
use Illuminate\Http\Request;

Carbon::setLocale('es');

class DiputadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = IntegranteLegislatura::all();
        foreach($data as $item){
            if($item->diputado){

            }else{
                dd($item);
            }
        }
        $partidos = Partido::all();
        $tipoComision = TipoComision::all();
        $comisionGeneral = Comision::where("nombre", "Junta de Coordinación Política (Jucopo)")
            ->orWhere("nombre", "Diputación Permanente del segundo Período de Receso del Tercer Año")->get();
        $genders = Genero::all();
        return view("pages.diputados.index", compact("data", "partidos", "tipoComision", "comisionGeneral", "genders"));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = IntegranteLegislatura::with(["autorcomunicado" => function ($q) {
            $q->whereHas("comunicado");
        }])->whereId($id)->first();
        $anfitrion = $this->getAgenda($data);
        $data = $data->diputado;
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
        return view("pages.diputados.ficha.show", compact("data", "actividadProxima", "actividadReciente"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getDiputados(Request $request)
    {
        if ($request->has("genero")) {
            $genero = $request->get("genero");
        } else {
            $genero = null;
        }
        $query = IntegranteLegislatura::query();
        if ($request->has("partido")) {
            $query->whereIn("partido_id", $request->get("partido"));
        }
        if (!is_null($genero)) {
            $query->whereHas("diputado", function ($q) use ($genero) {
                $q->where("genero_id", $genero);
            });
        }

        if ($request->has("comision")) {
            $comision = $request->get("comision");
            if ($request->has("partido")) {
                $partido = $request->get("partido");
            } else {
                $partido = null;
            }
            $comisiones = Comision::query()->with(["integranteComision" => function ($q) use ($partido, $genero) {
                $q->whereHas("integranteLegislatura", function ($q) use ($partido, $genero) {
                    if (!is_null($partido)) {
                        $q->whereIn("partido_id", $partido);
                    }
                    if (!is_null($genero)) {
                        $q->whereHas("diputado", function ($q) use ($genero) {
                            $q->whereHas("genero", function ($q) use ($genero) {
                                $q->where("id", $genero);
                            });
                        });
                    }
                });
                $q->with(["integranteLegislatura" => function ($q) {
                    $this->getWith($q);
                }]);
                $q->join('tipo_cargo_comisions', function ($join) {
                    $join->on('tipo_cargo_comisions.id', '=', 'integrante_comisions.tipo_cargo_comision_id');
                })->orderBy("tipo_cargo_comisions.nivel")->with("cargo")->get();
            }])
                ->whereIn("id", $comision)->get();
            return json_encode(["tipo" => "comision", "data" => $comisiones]);
        }
        dd($query);
        $this->getWith($query);
        return json_encode(["tipo" => "simple", "data" => $query->get()]);

    }

    public function getWith($q): void
    {
        $q->select("id", "dato_user_id", "partido_id", "distrito_id")
            ->with(["diputado" => function ($q) {
                $q->select("id", "apaterno", "amaterno", "nombres", "genero_id")
                    ->with(["foto" => function ($q) {
                        $q->select("fotoable_id", "path");
                    }])
                    ->with(["genero" => function ($q) {
                        $q->select("id", "genero");
                    }]);
                $q->orderBy("apaterno", "ASC");
            }])
            ->with(["partido" => function ($q) {
                $q->select("id", "siglas", "nombre");
            }])
            ->with("distrito");
    }

    public function searchDiputado(Request $request)
    {
        $crit = $request->get("crit");
        $query = IntegranteLegislatura::query()->whereHas("diputado", function ($q) use ($crit) {
            $q->where("apaterno", "LIKE", "%" . $crit . "%")
                ->orWhere("amaterno", "LIKE", "%" . $crit . "%")
                ->orWhere("nombres", "LIKE", "%" . $crit . "%");
        });
        $this->getWith($query);
        return json_encode(["tipo" => "simple", "data" => $query->get()]);

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
}
