<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Agenda;
use App\Models\AnioSesion;
use App\Models\Legislatura;
use App\Models\PeriodoSesion;
use App\Models\RegimenSesion;
use App\Models\Sede;
use App\Models\Sesiones;
use App\Models\TipoAsamblea;
use App\Models\TipoSesion;
use Illuminate\Http\Request;

class SesionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sesiones::all();
//        dd($data);
        return view("mcg.sesiones.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selects = $this->getSelects();
//        dd($selects);
        return view("mcg.sesiones.create", compact("selects"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fechaAgenda = $request->sesion["fecha"];
        $params = $this->getParams($request);
        $saveSesion = Sesiones::create($params);
        $sede = Sede::where("sede", "LIKE", "%Pleno%")->first();
        $agenda = Agenda::create([
            "descripcion" => $saveSesion->tipsesion->valor . " No." . $saveSesion->sesion,
            "sede_id" => $sede->id,
            "transmision" => 1,
            "fecha_hora" => $fechaAgenda,
            "liga" => "https://www.youtube.com/embed/U7d-6wQrnjI",
        ]);

//        $agenda->anfitrion()->create([
//            "tipo_autor_id" => "44565c64-06cb-44a3-b00e-d780ee2937bf",
//            "autor_id" => "afad35f0-39f5-4ece-826d-b4020381e14a",
//        ]);
        $saveSesion->agenda()->create(["agenda_id" => $agenda->id]);
        return redirect()->route("sesion.index")->with("create", "ok");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Sesiones::find($id);
        $selects = $this->getSelects();

        return view("mcg.sesiones.edit", compact("data", "selects"));
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
        $sesion = Sesiones::find($id);
        $fechaAgenda = $request->sesion["fecha"];

        $params = $this->getParams($request);
        $sesion->update($params);
        $sede = Sede::where("sede", "LIKE", "%Pleno%")->first();
        $data = [
            "descripcion" => $sesion->tipsesion->valor . " No." . $sesion->sesion,
            "transmision" => 1,
            "sede_id" => $sede->id,
            "fecha_hora" => $fechaAgenda,
        ];
        if ($sesion->agenda) {
            if ($sesion->agenda->agenda) {
                $sesion->agenda->agenda()->update($data);
                $agenda = $sesion->agenda->agenda;
            } else {
                $agenda = Agenda::create($data);
            }
            $sesion->agenda()->update(["agenda_id" => $agenda->id]);
        } else {
            $agenda = Agenda::create($data);
            $sesion->agenda()->create(["agenda_id" => $agenda->id]);
        }
//        if (!isset($sesion->agenda->anfitrion)) {
//            $sesion->agenda->agenda->anfitrion()->create([
//                "tipo_autor_id" => "44565c64-06cb-44a3-b00e-d780ee2937bf",
//                "autor_id" => "afad35f0-39f5-4ece-826d-b4020381e14a",
//            ]);
//        }

        return redirect()->route("sesion.index")->with("edit", "ok");
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

    public function getSelects()
    {
        $aniosesion = AnioSesion::all()->pluck("valor", "id");
        $periodosesion = PeriodoSesion::all()->pluck("valor", "id");
        $regimensesion = RegimenSesion::all()->pluck("valor", "id");
        $tiposesion = TipoSesion::all()->pluck("valor", "id");
        $legislatura = Legislatura::all()->pluck("numero", "id");
        $asamblea = TipoAsamblea::all()->pluck("valor", "id");

        return array($aniosesion, $periodosesion, $regimensesion, $tiposesion, $legislatura, $asamblea);
    }

    public function getFromDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d');
    }

    public function storeFile($file, $path)
    {
        return $file->storeAs(
            "storage/" . $path, $file->getClientOriginalName()
        );
    }

    public function getParams(Request $request): mixed
    {
        $params = $request->get("sesion");
        if ($request->file("documento_ordendia")) {
            $documento = $request["documento_ordendia"];
            $name = $documento->getClientOriginalName();
            $directorio = "storage/documentos/sesiones/ordendia";
            $path = $documento->storeAs($directorio, $name);
            $params["path_orden"] = $path;
        }
        if ($request->file("documento_actasesion")) {
            $documento = $request["documento_actasesion"];
            $name = $documento->getClientOriginalName();
            $directorio = "storage/documentos/sesiones/actasesion";
            $path = $documento->storeAs($directorio, $name);
            $params["path_acta"] = $path;
        }
        if ($request->file("documento_estenografia")) {
            $documento = $request["documento_estenografia"];
            $name = $documento->getClientOriginalName();
            $directorio = "storage/documentos/sesiones/estenografia";
            $path = $documento->storeAs($directorio, $name);
            $params["path_estenografia"] = $path;
        }
        $params["fecha"] = $this->getFromDateAttribute($params["fecha"]);
        return $params;
    }
}
