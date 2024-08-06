<?php

namespace App\Http\Controllers\MCG;

use App\Http\Controllers\Controller;
use App\Models\Diputadas;
use App\Models\Gender;
use App\Models\IntegranteLegislatura;
use Illuminate\Http\Request;

class DiputadasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gender = Gender::where('genero', 'Femenino')->first();

        $diputadas = IntegranteLegislatura::whereHas("diputado", function ($q) use ($gender){
            $q->where("gender_id", $gender->id);
        })->get();
        return view('mcg.diputadas.index', compact('diputadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mcg.diputadas.create');

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
        $diputada = IntegranteLegislatura::find($id);
        return view('mcg.diputadas.edit', compact( "diputada"));
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

        $diputada = Diputadas::where('integrante_legislatura_id',$id)->first();

        if(isset($diputada)){
            $diputada->update([
                "descripcion" => $request->descripcion == null ? " " : $request->descripcion,
            ]);
            if ($request->shortimages) {
                $foto = $request->shortimages;
                $name = $foto->getClientOriginalName();
                $directorio = "storage/img/fotos/diputadas";
                $ima1 = $foto->storeAs($directorio, $name);
                $diputada->update([
                    "short_images" => $ima1
                ]);
            }
            if ($request->images) {
                $foto = $request->images;
                $name = $foto->getClientOriginalName();
                $directorio = "storage/img/fotos/diputadas";
                $ima2 = $foto->storeAs($directorio, $name);
                $diputada->update([
                    "images" => $ima2
                ]);
            }
        }else{
            $dip = Diputadas::create([
                "descripcion" => $request->descripcion == null ? " " : $request->descripcion,
                "integrante_legislatura_id" => $id,
            ]);
            if ($request->shortimages) {
                $foto = $request->shortimages;
                $name = $foto->getClientOriginalName();
                $directorio = "storage/img/fotos/diputadas";
                $ima1 = $foto->storeAs($directorio, $name);
                $dip->update([
                    "images" => $ima1
                ]);
            }
            if ($request->images) {
                $foto = $request->images;
                $name = $foto->getClientOriginalName();
                $directorio = "storage/img/fotos/diputadas";
                $ima2 = $foto->storeAs($directorio, $name);
                $dip->update([
                    "images" => $ima2
                ]);
            }
        }
        return redirect()->route("diputada.index")->with("correcto", "ok");
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
}
