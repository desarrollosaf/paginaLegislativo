<?php

namespace App\Http\Controllers\MCG;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Banner::all();
        return view("mcg.banners.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("mcg.banners.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $params = $request->get("data");
        if ($params["tipo"] == "true") {
            $documentoPath = $params["liga"];
            $tipo = 1;
        } else {
            $request["documento"]["documento"]->storeAs("storage/documentos/banners", $request["documento"]["documento"]->getClientOriginalName());
            $documentoPath = "storage/documentos/banners/" . $request["documento"]["documento"]->getClientOriginalName();
            $tipo = 0;
        }
        $orden = Banner::orderBy("orden", "DESC")->first();
            if($orden){
                $orden = $orden->orden + 1;
            }else{
                $orden = 1;
            }

        $banners = Banner::create([
            "descripcion" => $params["titulo"],
            "type" => $tipo,
            "url" => $documentoPath,
            "orden" => $orden,
        ]);

        $banner = $request["banner"]["banner"];
        $name = $banner->getClientOriginalName();
        $directorio = "storage/img/fotos/banners";
        $path = $banner->storeAs($directorio,$name);
        $banners->foto()->create([
            "path" =>  $path
        ]);

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

    public function storeFile()
    {

    }
}
