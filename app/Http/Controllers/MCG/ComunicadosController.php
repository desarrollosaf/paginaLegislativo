<?php

namespace App\Http\Controllers\MCG;

use App\Http\Controllers\Controller;
use App\Models\Legislatura;
use App\Models\NivelAutor;
use App\Models\OtrosAutores;
use Illuminate\Http\Request;
use App\Models\Comunicado;
use App\Models\Comision;
use App\Models\DecretoIniciativa;
use App\Models\DecretoIniciativaTemporal;
use App\Models\Iniciativa;
use App\Models\IntegranteLegislatura;
use App\Models\Municipio;
use App\Models\Partido;
use App\Models\TipoAutor;
use App\Models\TipoCategoriaIniciativa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ComunicadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunicados = Comunicado::all();
        return view('mcg.comunicados.index', compact('comunicados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selects = $this->getSelects();
        $last = Comunicado::orderBy("comunicado", "DESC")->first()->comunicado;
        $last = $last + 1;
        return view('mcg.comunicados.create', compact("selects", "last"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $comunicados = $request->get("comunicados");
//        dd($comunicados["fecha"]);
//        $comunicados["fecha"] = \Carbon\Carbon::createFromFormat("d/m/Y", $comunicados["fecha"])->format('Y-m-d');
        $comunicados["texto"] = $this->br2nl($comunicados["texto"]);
        $autores = json_decode($request->get("autores"));
        $bullets = json_decode($request->get("bullets"));
        $fotos = json_decode($request->get("fotos"));
        $saveComunicado = Comunicado::create($comunicados);
        if (count($autores)) {
            foreach ($autores as $item) {
                $saveComunicado->autor()->create([
                    "tipo_autor_id" => $item->tipo_autor_id,
                    "autor_id" => $item->autor_id,
                ]);
            }
        }
        if (count($bullets)) {
            foreach ($bullets as $item) {
                $saveComunicado->descripcionComunicado()->create([
                    "bullets" => $item->texto,
                    "orden" => $item->indice,
                ]);
            }
        }
        if (count($fotos)) {
            foreach ($fotos as $item) {
                $saveComunicado->foto()->firstOrCreate([
                    "path" => $item->path
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
        $data = Comunicado::find($id);
        $selects = $this->getSelects();
        return view("mcg.comunicados.edit", compact("data", "selects"));
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
        $comunicados = $request->get("comunicados");

        if($comunicados["publicado"] == 0){
            $comunicados["fecha_publicacion"] = null;
        }
//        $comunicados["fecha"] = \Carbon\Carbon::createFromFormat("d/m/Y", $comunicados["fecha"])->format('Y-m-d');
        $autores = json_decode($request->get("autores"));
        $bullets = json_decode($request->get("bullets"));
        $fotos = json_decode($request->get("fotos"));

        $saveComunicado = Comunicado::find($id);
        $saveComunicado->update($comunicados);

        if (count($autores)) {
            $existente = [];
            foreach ($autores as $item) {
                $autor = $saveComunicado->autor()->firstOrCreate([
                    "tipo_autor_id" => $item->tipo_autor_id,
                    "autor_id" => $item->autor_id,
                ]);
                $existente[] = $autor->id;
            }
            $saveComunicado->autor()->whereNotIn("id", $existente)->delete();
        }

        if (count($bullets)) {
            $existente = [];
            foreach ($bullets as $item) {
                $bullet = $saveComunicado->descripcionComunicado()->firstOrCreate([
//                    "id" => $item->id,

                    "bullets" => $item->texto,
                    "orden" => $item->indice,
                ]);
                $existente[] = $bullet->id;
            }
            $saveComunicado->descripcionComunicado()->whereNotIn("id", $existente)->delete();

        }
        if (count($saveComunicado->foto)) {
            foreach ($saveComunicado->foto as $item) {
                $item->delete();
            }
        }

        if (count($fotos)) {
            foreach ($fotos as $item) {
                $saveComunicado->foto()->firstOrCreate([
                    "path" => $item->path
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
        $comunicad = Comunicado::find($id);
        if ($comunicad->foto) {
            foreach ($comunicad->foto as $foto) {
                Storage::delete($foto->path);
                $foto->delete();
            }
        }
        $comunicad->autor()->delete();
        $comunicad->descripcionComunicado()->delete();
        $comunicad->delete();
        return redirect()->back();
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

    public function redirect()
    {
        return redirect()->route("comunicados.index")->with("created", "success");
    }

    public function createFoto(Request $request)
    {
        $fotos = [];
        $imagenes = $request->file("foto");
        foreach ($imagenes as $item) {
            $uuid = Str::uuid();
            $name = $item->getClientOriginalName();
            $name2 = explode(".", $name);
            $name = $name2[0].$uuid.'.'. $item->getClientOriginalExtension();
            $directorio = "storage/img/fotos/comunicados/lxi";
            $path = $item->storeAs($directorio, $name);
            $fotos[] = ["path" => $path];
        }
        return json_encode($fotos);
    }

    public function getComunicado(Request $request)
    {
        if ($request->has("this")) {
            if ($request->get("comunicados")["comunicado"] == $request->get("this")) {
                return "true";
            }
        }
        $iniciativa = Comunicado::where("comunicado", $request->get("comunicados")["comunicado"])->first();
        if ($iniciativa) {
            return "false";
        } else {
            return "true";
        }
    }

    function br2nl($string)
    {
        return str_replace(array('\r', '\n'), array("\r", "\n"), $string);
    }
}
