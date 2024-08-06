<?php

namespace App\Http\Controllers\MCG;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Comision;
use App\Models\IntegranteLegislatura;
use App\Models\Legislatura;
use App\Models\Municipio;
use App\Models\OtrosAutores;
use App\Models\Partido;
use App\Models\Sede;
use App\Models\TipoAutor;
use Illuminate\Http\Request;
ini_set('client_max_body_size ', '100mb');
ini_set('upload_max_filesize  ', '100mb');
ini_set('post_max_size  ', '100mb');

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Agenda::orderBy("fecha_hora", "DESC")->get();
        return view('agenda.index', compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selects = $this->getSelects();

        return view('agenda.create', compact("selects"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agenda = $request->get("agenda");
        $anfitriones = json_decode($request->get("autores"));
        $agenda = Agenda::create($agenda);

        if (count($anfitriones)) {
            foreach ($anfitriones as $item) {
                $agenda->anfitrion()->create([
                    "tipo_autor_id" => $item->tipo_autor_id,
                    "autor_id" => $item->autor_id,
                ]);
            }
        }
        return response(["response" => "success"], 200);
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
        $selects = $this->getSelects();
        $agenda = Agenda::find($id);
        return view("agenda.edit", compact("agenda", "selects"));
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
        $agenda = $request->get("agenda");
        $anfitriones = json_decode($request->get("autores"));
        $res = Agenda::find($id);
        $res->update($agenda);
        if (count($anfitriones)) {
            foreach ($anfitriones as $item) {
                $res->anfitrion()->firstOrCreate([
                    "tipo_autor_id" => $item->tipo_autor_id,
                    "autor_id" => $item->autor_id,
                ]);
            }
        }
        return response(["response" => "success"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda = Agenda::find($id);
        $agenda->anfitrion()->delete();
        $agenda->delete();
        return redirect()->route("agenda.index")->with("deleted", "success");

    }

    public function getSelects()
    {
        $sede = Sede::all()->pluck("sede", "id");
        $comisiones = Comision::all()->pluck("nombre", "id");
        $municipios = Municipio::orderBy("cabecera", "ASC")->get()->pluck("cabecera", "id");
        $partidos = Partido::all()->pluck("nombre", "id");
        $diputados = IntegranteLegislatura::all()->pluck("nombre_field", "id");
        $tipoAutores = TipoAutor::all()->pluck("valor", "id");
        $otros = OtrosAutores::all()->pluck("valor", "id");
        $legislatura = Legislatura::all()->pluck("numero", "id");
        return array($sede, $comisiones, $municipios, $partidos, $diputados, $tipoAutores, $otros, $legislatura);
    }

    public function redirectIndex()
    {
        return redirect()->route("agenda.index")->with("created", "success");
    }
}
