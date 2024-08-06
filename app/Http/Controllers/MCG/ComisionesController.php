<?php

namespace App\Http\Controllers\MCG;

use App\Models\Comision;
use App\Models\IntegranteComision;
use App\Models\IntegranteLegislatura;
use App\Models\TipoCargoComision;
use App\Models\TipoComision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComisionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = Comision::all();
        return view('mcg.comision.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $tipo = TipoComision::all()->pluck("valor", "id");
        return view('mcg.comision.create', compact("tipo"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Comision::create($request->get("comision"));
        return redirect()->route("comision.index");
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $comision = Comision::find($id);
        $tipo = TipoComision::all()->pluck("valor", "id");
        return view('mcg.comision.update', compact("tipo", "comision"));
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
        $comision = Comision::find($id);
        $comision->update($request->get("comision"));
        return redirect()->route("comision.index");
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

    public function getIntegrantes($id)
    {
        return IntegranteComision::where("comision_id", $id)->get();
    }

    public function editIntegrantes($id)
    {
        $integrantes = IntegranteLegislatura::all()->pluck("nombre_field", "id");
        $cargos = TipoCargoComision::orderBy("nivel")->pluck("valor", "id");
        $comision = Comision::with(["integrante" => function ($q) {
            $q->with(["cargo" => function ($q) {
                $q->orderBy("nivel", "ASC");
            }])->with(["integranteLegislatura" => function ($q) {
                $q->with("diputado");
            }])->whereHas("integranteLegislatura");
        }])->whereId($id)->first();

        return view("mcg.comision.integrantes", compact("comision", "integrantes", "cargos"));
    }

    public function getCargoDip(Request $request)
    {
        $cargo = TipoCargoComision::find($request->get("cargo"));
        $integrante = IntegranteLegislatura::with("diputado")->find($request->get("integrante"));
        $data = [
            "tipo_cargo_comision_id" => $cargo->id,
            "cargo" => $cargo,
            "integrante_legislatura_id" => $integrante->id,
            "integrante_legislatura" => $integrante
        ];
        return response($data, 200);
    }

    public function saveIntegrantes(Request $request, $id)
    {
        $data = json_decode($request->get("integrantes"));
        $comision = Comision::find($id);
        if (count($data)) {
            $existente = [];
            foreach ($data as $item) {
                $integrante = $comision->integrante()->firstOrCreate([
                    "integrante_legislatura_id" => $item->integrante_legislatura_id,
                    "tipo_cargo_comision_id" => $item->tipo_cargo_comision_id,
                ]);
                $existente[] = $integrante->id;
            }
            $comision->integrante()->whereNotIn("id", $existente)->delete();
        }
        return response(["rsponse" => "success"], 200);
    }
}
