<?php

namespace App\Http\Controllers\MCG;

use App\Http\Controllers\Controller;
use App\Models\AcuerdoIniciativa;
use App\Models\AutorIniciativa;
use App\Models\Comision;
use App\Models\DecretoIniciativa;
use App\Models\DecretoIniciativaTemporal;
use App\Models\Iniciativa;
use App\Models\IntegranteLegislatura;
use App\Models\Legislatura;
use App\Models\Municipio;
use App\Models\NivelAutor;
use App\Models\OtrosAutores;
use App\Models\Partido;
use App\Models\TipoAutor;
use App\Models\TipoCategoriaIniciativa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\IniciativasExport;

class IniciativasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $request;
    public $ruta;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $ruta = explode('/', URL::previous());
        if (isset($ruta[5]) && $ruta[5] == "puntos") {
            $this->ruta = "Punto de acuerdo";
        } else {
            $this->ruta = "Iniciativa";
        }
    }

    public function index()
    {
        $id = TipoCategoriaIniciativa::where("valor", "Iniciativa")->first()->id;
        $data = Iniciativa::where("categoria_id", $id)->get();
        $ruta = "Iniciativas";
        return view("mcg.iniciativas.index", compact("data", "ruta"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruta = $this->ruta;
        if ($ruta == "Punto de acuerdo") {
            $id = TipoCategoriaIniciativa::where("valor", "!=", "Iniciativa")->first()->id;
        } else {
            $id = TipoCategoriaIniciativa::where("valor", "Iniciativa")->first()->id;
        }
        $selects = $this->getSelects();
        return view("mcg.iniciativas.create", compact("selects", "ruta", "id"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $iniciativa = $request->get("iniciativa");
        $acuerdo = $request->get("acuerdo");
        $autores = json_decode($request->get("autores"));
        $comisiones = json_decode($request->get("comisiones"));
        $decretos = json_decode($request->get("decretos"));
        if ($request->file("logotipo")) {
            $path = "documentos/iniciativas";
            $iniciativa["path"] = $this->storeFile($request->file("logotipo"), $path);
        }

        $iniciativa["fecha_presentacion"] = $this->getFromDateAttribute($iniciativa["fecha_presentacion"]);
        $iniciativa["fecha_expedicion"] = $this->getFromDateAttribute($iniciativa["fecha_expedicion"]);
        $saveIniciativa = Iniciativa::create($iniciativa);

        if (isset($acuerdo["nombre_acuerdo"])) {
            $acuerdo["fecha_acuerdo"] = $this->getFromDateAttribute($acuerdo["fecha_acuerdo"]);
            $saveAcuerdo = $saveIniciativa->acuerdo()->create($acuerdo);
            if ($request->file("documento_acuerdo")) {
                $path = "documentos/acuerdos";
                $saveAcuerdo->documento()->create(["path" => $path]);
            }
        }
//        dd($autores);
        if (count($autores)) {
            foreach ($autores as $item) {
                $saveIniciativa->autor()->create([
                    "tipo_autor_id" => $item->tipo_autor_id,
                    "autor_id" => $item->autor_id,
                    "nivel_autor_id" => $item->nivel_autor_id,
                ]);
            }
        }
        if (count($comisiones)) {
            foreach ($comisiones as $item) {
                $saveIniciativa->comision()->create([
                    "comision_id" => $item[0],
                ]);
            }
        }
        if (count($decretos)) {
            foreach ($decretos as $item) {
                DecretoIniciativaTemporal::find($item->id)->delete();
                $data = [
                    "fecha_decreto" => $item->fecha_decreto,
                    "numero_decreto" => $item->numero_decreto,
                    "nombre_decreto" => $item->nombre_decreto,
                ];
                $decreto = $saveIniciativa->decreto()->create($data);
                if (isset($item->path)) {
                    $decreto->documento()->create(["path" => $item->path]);
                }
            }
        }

        return true;
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
        $ruta = $this->ruta;
        $data = Iniciativa::find($id);
        $selects = $this->getSelects();
        return view("mcg.iniciativas.edit", compact("selects", "data", "ruta"));
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
        $iniciativa = $request->get("iniciativa");
        $acuerdo = $request->get("acuerdo");
        $autores = json_decode($request->get("autores"));
        $comisiones = json_decode($request->get("comisiones"));
        $decretos = json_decode($request->get("decretos"));
        if ($request->file("logotipo")) {
            $path = "documentos/iniciativas";
            $iniciativa["path"] = $this->storeFile($request->file("logotipo"), $path);
        }
        $iniciativa["fecha_presentacion"] = $this->getFromDateAttribute($iniciativa["fecha_presentacion"]);
        $iniciativa["fecha_expedicion"] = $this->getFromDateAttribute($iniciativa["fecha_expedicion"]);
        $saveIniciativa = Iniciativa::find($id);

        if (isset($acuerdo["nombre_acuerdo"])) {
            $acuerdo["fecha_acuerdo"] = $this->getFromDateAttribute($acuerdo["fecha_acuerdo"]);
            $saveAcuerdo = $saveIniciativa->acuerdo()->update($acuerdo);
            if ($request->file("documento_acuerdo")) {
                $path = "documentos/acuerdos";
                $saveAcuerdo->documento()->create(["path" => $path]);
            }
        }
//        dd($autores);
        if (count($autores)) {
            $existente = [];
            foreach ($autores as $item) {
                $autor = $saveIniciativa->autor()->firstOrCreate([
                    "tipo_autor_id" => $item->tipo_autor_id,
                    "autor_id" => $item->autor_id,
                    "nivel_autor_id" => $item->nivel_autor_id,
                ]);
                $existente[] = $autor->id;
            }
            $saveIniciativa->autor()->whereNotIn("id", $existente)->delete();


        }
        if (count($comisiones)) {
            $existente = [];
            foreach ($comisiones as $item) {
                $comision = $saveIniciativa->comision()->firstOrCreate([
                    "comision_id" => $item[0],
                ]);
                $existente[] = $comision->id;
            }
            $saveIniciativa->comision()->whereNotIn("id", $existente)->delete();
        }
        if (count($decretos)) {
            $existente = [];
            foreach ($decretos as $item) {
                $temporal = DecretoIniciativaTemporal::find($item->id);
                if ($temporal) {
                    $temporal->delete();
                }
                $data = [
                    "fecha_decreto" => $item->fecha_decreto,
                    "numero_decreto" => $item->numero_decreto,
                    "nombre_decreto" => $item->nombre_decreto,
                ];
                $decreto = $saveIniciativa->decreto()->firstOrCreate($data);
                if (isset($item->path)) {
                    $decreto->documento()->firstOrCreate(["path" => $item->path]);
                }
                $existente[] = $decreto->id;
            }
            $saveIniciativa->decreto()->whereNotIn("id", $existente)->delete();
        }

        return true;
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
        $categorias = TipoCategoriaIniciativa::all()->pluck("valor", "id");
        $comisiones = Comision::all()->pluck("nombre", "id");
        $municipios = Municipio::orderBY("municipio")->get()->pluck("municipio", "id");
        $partidos = Partido::all()->pluck("nombre", "id");
        $diputados = IntegranteLegislatura::all()->pluck("nombre_field", "id");
        $tipoAutores = TipoAutor::orderBy("created_at")->pluck("valor", "id");
        $nivelAutores = NivelAutor::orderBy("valor", "ASC")->get()->pluck("valor", "id");
        $otros = OtrosAutores::orderBy("valor", "ASC")->get()->pluck("valor", "id");
        $legislatura = Legislatura::all()->pluck("numero", "id");
        return array($categorias, $comisiones, $municipios, $partidos, $diputados, $tipoAutores, $nivelAutores, $otros, $legislatura);
    }

    public function createDecreto(Request $request)
    {
        $params = $request->except("_token");
        $params["fecha_decreto"] = Carbon::createFromFormat("d/m/Y", $params["fecha_decreto"]);
        if ($request->has("documento_decreto")) {
            $path = "documentos/decretos";
            $params["path"] = $this->storeFile($request->file("documento_decreto"), $path);
        }
        return DecretoIniciativaTemporal::create($params);
    }

    public function storeFile($file, $path)
    {
        return $file->storeAs(
            "storage/" . $path, $file->getClientOriginalName()
        );
    }

    public function getFolio(Request $request)
    {
        if ($request->has("this")) {
            if ($request->get("iniciativa")["folio"] == $request->get("this")) {
                return "true";
            }
        }
        $iniciativa = Iniciativa::where("folio", $request->get("iniciativa")["folio"])->first();
        if ($iniciativa) {
            return "false";
        } else {
            return "true";
        }
    }

    public function getDecreto(Request $request)
    {
        $iniciativa = DecretoIniciativa::where("numero_decreto", $request->get("numero_decreto"))->first();
        $iniciativatemporal = DecretoIniciativaTemporal::where("numero_decreto", $request->get("numero_decreto"))->first();
        if ($iniciativa || $iniciativatemporal) {
            return "false";
        } else {
            return "true";
        }
    }

    public function setData($request)
    {
        return $request;
    }

    public function getFromDateAttribute($value)
    {
        return \Carbon\Carbon::createFromFormat("d/m/Y", $value)->format('Y-m-d');
    }

    public function redirectIndex($categoria)
    {
        $cat = TipoCategoriaIniciativa::find($categoria);
        if ($cat->valor == "Iniciativa") {
            return redirect()->route("iniciativas.index")->with("created", "success");
        } else {
            return redirect()->route("iniciativas.puntos")->with("created", "success");
        }
    }

    public function deleteAutor($iniciativa, $id)
    {
        $iniciativa = AutorIniciativa::where("iniciativa_id", $iniciativa)->where("autor_id", $id)->first();
        if ($iniciativa) {
            $iniciativa->delete();
        }
        return "success";
    }

    public function puntosIndex()
    {
        $id = TipoCategoriaIniciativa::where("valor", "!=", "Iniciativa")->first()->id;
        $data = Iniciativa::where("categoria_id", $id)->get();
        $ruta = "Puntos de acuerdo";
        return view("mcg.iniciativas.index", compact("data", "ruta"));
    }

    public function iniciativasXlsx()
    {
        $id = TipoCategoriaIniciativa::where("valor", "Iniciativa")->first()->id;
        $data = Iniciativa::where("categoria_id", $id)->with('autor')->orderBy("folio")->get();

        return Excel::download(new IniciativasExport($data), "reporte_excel_iniciativas.xlsx");
    }

    public function puntosAcuerdoXlsx()
    {
        $id = TipoCategoriaIniciativa::where("valor", "Punto de acuerdo")->first()->id;
        $data = Iniciativa::where("categoria_id", $id)->with('autor')->orderBy("folio")->get();

        return Excel::download(new IniciativasExport($data), "reporte_excel_puntosAcu.xlsx");
    }
}
