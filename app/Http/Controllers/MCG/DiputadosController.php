<?php

namespace App\Http\Controllers\MCG;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diputado;
use App\Models\Gender;
use App\Models\Distrito;
use App\Models\Partido;
use App\Models\EstatusDiputado;
use App\Models\IntegranteLegislatura;
use App\Models\Legislatura;
use App\Models\MovimientosDiputados;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class DiputadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diputados = Diputado::all();
        return view('mcg.diputados.index', compact('diputados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selects = $this->getSelects();
        $distritos = $this->getDistritos();
        $partidos = $this->getPartidos();

//        dd($partidos);


        return view('mcg.diputados.create', compact("selects", "distritos", "partidos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diputado = Diputado::create([
            "apaterno" =>    $request->apaterno == null ? " " : $request->apaterno,
            "amaterno" =>    $request->amaterno == null ? " " : $request->amaterno,
            "nombres" =>     $request->nombres == null ? " " : $request->nombres,
            "descripcion" => $request->descripcion == null ? " " : $request->descripcion,
            "shortname" =>   $request->shortname == null ? " " : $request->shortname,
            "fancyurl" =>    $request->fancyurl == null ? " " : $request->fancyurl,
            "gender_id" =>   $request->genero == null ? " " : $request->genero,
            "email" =>       $request->email == null ? " " : $request->email,
            "ext" =>         $request->ext == null ? " " : $request->ext,
            "facebook" =>    $request->facebook == null ? " " : $request->facebook,
            "twitter" =>     $request->twitter == null ? " " : $request->twitter,
            "instagram" =>   $request->instagram == null ? " " : $request->instagram,
            "ubicacion" =>   $request->ubicacion == null ? " " : $request->ubicacion,
            "link_web" =>   $request->link_web == null ? " " : $request->link_web,
            "telefono" =>   $request->telefono == null ? " " : $request->telefono,
        ]);

        $foto = $request["documento"];
        $name = $foto->getClientOriginalName();
        $directorio = "storage/img/fotos/dip/lxi";
        $path = $foto->storeAs($directorio,$name);
        $diputado->foto()->create([
            "path" =>  $path
        ]);

        $date = Carbon::now();
        $legis = Legislatura::first();
        $integrantesleg = IntegranteLegislatura::create([
            "legislatura_id" => $legis->id,
            "diputado_id" =>    $diputado->id == null ? " " : $diputado->id,
            "partido_id" =>     $request->partido_id == null ? " " : $request->partido_id,
            "distrito_id" =>    $request->distrito_id == null ? " " : $request->distrito_id,
            "fecha_ingreso" =>  $date,
        ]);
        $estatusdip = EstatusDiputado::where("valor", "Activo")->first();
        $movimientodip = MovimientosDiputados::create([
            "diputado_id" =>         $diputado->id == null ? " " : $diputado->id,
            "estatus_diputado_id" => $estatusdip->id,
            "fecha_movimiento" =>    $date,
        ]);
        return redirect()->route("diputados.index")->with("correcto", "ok");




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diputado = Diputado::find($id);
//        dd($diputado);
        $selects = $this->getSelects();
        $distritos = $this->getDistritos();
        $partidos = $this->getPartidos();


        return view('mcg.diputados.edit', compact("selects", "distritos", "partidos","diputado"));
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

        $diputado = Diputado::find($id);

        $diputado->update([
            "apaterno" => $request->apaterno == null ? " " : $request->apaterno,
            "amaterno" => $request->amaterno == null ? " " : $request->amaterno,
            "nombres" => $request->nombres == null ? " " : $request->nombres,
            "descripcion" => $request->descripcion == null ? " " : $request->descripcion,
            "shortname" => $request->shortname == null ? " " : $request->shortname,
            "fancyurl" => $request->fancyurl == null ? " " : $request->fancyurl,
            "gender_id" => $request->genero == null ? " " : $request->genero,
            "email" => $request->email == null ? " " : $request->email,
            "ext" => $request->ext == null ? " " : $request->ext,
            "facebook" => $request->facebook == null ? " " : $request->facebook,
            "twitter" => $request->twitter == null ? " " : $request->twitter,
            "instagram" => $request->instagram == null ? " " : $request->instagram,
            "ubicacion" =>   $request->ubicacion == null ? " " : $request->ubicacion,
            "link_web" =>   $request->link_web == null ? " " : $request->link_web,
            "telefono" =>   $request->telefono == null ? " " : $request->telefono,
        ]);

        if ($request["documento"]) {
            if ($diputado->foto) {
                $foto = $diputado->foto;
                Storage::disk('public')->delete($foto->path);
            }
            $foto = $request["documento"];
            $name = $foto->getClientOriginalName();
            $directorio = "storage/img/fotos/dip/lxi";
            $path = $foto->storeAs($directorio, $name);

            $diputado->foto()->update([
                "path" => $path
            ]);
        }

        $diputado->IntegranteLegislatura->update([
            "partido_id" => $request->partido_id == null ? " " : $request->partido_id,
            "distrito_id" => $request->distrito_id == null ? " " : $request->distrito_id,
        ]);
        return redirect()->route("diputados.index")->with("edit", "ok");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $diputado = Diputado::find($id);
//        dd($diputado);
        $diputado->delete();

        return redirect()->back()->with('deleteD', 'ok');
    }
    public function getSelects()
    {
        $gender = Gender::all()->pluck("genero", "id");
//        dd($gender);
        return array($gender);
    }
    public function getDistritos()
    {
        $distritos =  Distrito::all()->pluck("distrito", "id");
//        dd($gender);
        return array($distritos);
    }
    public function getPartidos()
    {
        $partidos =   Partido::all()->pluck("nombre", "id");
//        dd($gender);
        return array($partidos);
    }
    public function getEstatusDip()
    {
        $estatus =   EstatusDiputado::all()->pluck("valor", "id");
//        dd($gender);
        return array($estatus);
    }
}
