<?php

namespace App\Http\Controllers\MCG;

use App\Http\Controllers\Controller;
use App\Models\Informes;
use App\Models\IntegranteLegislatura;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InformeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informes = Informes::all();
        //dd($informes);
        return view('mcg.informe.index', compact( "informes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diputados = IntegranteLegislatura::all()->pluck("nombre_field", "id");
        return view('mcg.informe.create', compact( "diputados"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $bullets = json_decode($request->get("bullets"));
        $fotos = json_decode($request->get("fotos"));
//        dd($fotos);
        if($request->liga || $request->documento){
//            dd("con algo");
            if ($request->tipo == "true") {
                $archivo = $request->liga;
                $tipo = 1;
            } else {
                $name = $request->documento->getClientOriginalName();
                $directorio = "storage/img/videos/informe/lxi";
                $archivo = $request->documento->storeAs($directorio, $name);
                $tipo = 0;
            }
        }else{
//            dd("sin nada");
            $archivo = null;
            $tipo = 1;
        }


        if($request->foto_principal){
            $name = $request->foto_principal->getClientOriginalName();
            $directorio = "storage/img/fotos/informe/lxi";
            $principal = $request->foto_principal->storeAs($directorio, $name);
        }else{
            $principal = null;
        }

        if($request->foto_ficha){
            $name = $request->foto_ficha->getClientOriginalName();
            $directorio = "storage/img/fotos/informe/lxi";
            $fficha = $request->foto_ficha->storeAs($directorio, $name);
        }else{
            $fficha = null;
        }

        if($request->foto_descarga){
            $name = $request->foto_descarga->getClientOriginalName();
            $directorio = "storage/img/fotos/informe/lxi";
            $fdes = $request->foto_descarga->storeAs($directorio, $name);
        }else{
            $fdes = null;
        }

        if($request->header_dip){
            $name = $request->header_dip->getClientOriginalName();
            $directorio = "storage/img/fotos/informe/lxi";
            $headd= $request->header_dip->storeAs($directorio, $name);
        }else{
            $headd = null;
        }

        if($request->documento_informe){
            $nam = $request->documento_informe->getClientOriginalName();
            $direc = "storage/documentos/informes";
            $path = $request->documento_informe->storeAs($direc, $nam);
        }else{
            $path = null;
        }


        $saveinforme = Informes::create([
            "integrante_legislatura_id" => $request->autor,
            "path" => $path,
            "foto_principal" => $principal,
            "foto_ficha" => $fficha,
            "foto_descarga" => $fdes,
            "liga" => $archivo,
            "type" => $tipo,
            "header_dip" => $headd,
            "fecha_inter" =>  Carbon::createFromFormat("d/m/Y", $request->fecha_inter),
        ]);

        if (count($bullets)) {
            foreach ($bullets as $item) {
                $saveinforme->leyesInforme()->create([
                    "bullets" => $item->texto,
                    "orden" => $item->indice,
                ]);
            }
        }
        if (count($fotos)) {
            foreach ($fotos as $item) {
                $saveinforme->foto()->firstOrCreate([
                    "path" => $item->path
                ]);
            }
        }
        return response(["response" => "success"], 200);
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
        $informe = Informes::find($id);
        $diputados = IntegranteLegislatura::all()->pluck("nombre_field", "id");

        return view('mcg.informe.edit', compact( "informe" , "diputados"));
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
//        dd($request->all());
        set_time_limit(-1);
        try{
            $informe = Informes::find($id);

        $informe->leyesInforme()->delete();
        $informe->foto()->delete();

        $bullets = json_decode($request->get("bullets"));
        $fotos = json_decode($request->get("fotos"));


        if ($request->tipo == "true") {
            $archivo = $request->liga;
            $tipo = 1;
        } elseif ($request->tipo == "false") {
            $name = $request->documento->getClientOriginalName();
            $directorio = "storage/img/videos/informe/lxi";
            $archivo = $request->documento->storeAs($directorio, $name);
            $tipo = 0;
        } else {
            $archivo = $informe->liga;
            $tipo = $informe->type;
        }


        if ($request->foto_principal) {
            $name = $request->foto_principal->getClientOriginalName();
            $directorio = "storage/img/fotos/informe/lxi";
            $principal = $request->foto_principal->storeAs($directorio, $name);
        } else {
            $principal = $informe->foto_principal;
        }

        if($request->foto_ficha){
            $name = $request->foto_ficha->getClientOriginalName();
            $directorio = "storage/img/fotos/informe/lxi";
            $fficha = $request->foto_ficha->storeAs($directorio, $name);
        }else{
            $fficha =  $informe->foto_ficha;
        }

        if($request->foto_descarga){
            $name = $request->foto_descarga->getClientOriginalName();
            $directorio = "storage/img/fotos/informe/lxi";
            $fdes = $request->foto_descarga->storeAs($directorio, $name);
        }else{
            $fdes =  $informe->foto_descarga;
        }

        if($request->documento_informe){
            $nam = $request->documento_informe->getClientOriginalName();
            $direc = "storage/documentos/informes";
            $path = $request->documento_informe->storeAs($direc, $nam);
        }else{
            $path =  $informe->path;
        }


        if($request->header_dip){
            $name = $request->header_dip->getClientOriginalName();
            $directorio = "storage/img/fotos/informe/lxi";
            $headd= $request->header_dip->storeAs($directorio, $name);
        }else{
            $headd = $informe->header_dip;
        }

        
       $informe->update([
            "integrante_legislatura_id" => $request->autor,
            "path" => $path,
            "foto_principal" => $principal,
            "foto_ficha" => $fficha,
            "foto_descarga" => $fdes,
           "liga" => $archivo,
           "type" => $tipo,
            "header_dip" => $headd,
            "fecha_inter" =>  Carbon::createFromFormat("d/m/Y", $request->fecha_inter),
        ]);

        if (count($bullets)) {
            foreach ($bullets as $item) {
                $informe->leyesInforme()->create([
                    "bullets" => $item->texto,
                    "orden" => $item->indice,
                ]);
            }
        }
        if (count($fotos)) {
            foreach ($fotos as $item) {
                $informe->foto()->firstOrCreate([
                    "path" => $item->path
                ]);
            }
        }
            return response(["response" => "success"], 200);
        }catch (\Throwable $e) {
            dd('holi');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $informe = Informes::find($id);
        $informe->leyesInforme()->delete();
        $informe->foto()->delete();
        $informe->delete();


        return redirect()->route("informel.index")->with("created", "success");
    }
    public function createFoto(Request $request)
    {
        $fotos = [];
        $imagenes = $request->file("foto");
        foreach ($imagenes as $item) {
            $name = $item->getClientOriginalName();
            $directorio = "storage/img/fotos/informe/lxi";
            $path = $item->storeAs($directorio, $name);
            $fotos[] = ["path" => $path];
        }
        return json_encode($fotos);
    }
    public function redirect()
    {
        return redirect()->route("informel.index")->with("created", "success");
    }
}
