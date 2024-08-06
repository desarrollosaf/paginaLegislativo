<?php

namespace App\Http\Controllers;

use App\Models\Comunicado;
use App\Models\Iniciativa;
use Illuminate\Http\Request;
use Spatie\Searchable\ModelSearchAspect;
use Spatie\Searchable\Search;
use App\Models\Diputado;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $searchterm = $request->input('tema');

        $result = (new Search())
            ->registerModel(Diputado::class, function (ModelSearchAspect $modelSearchAspect) {
                $modelSearchAspect
                    ->addSearchableAttribute('nombres')
                    ->addSearchableAttribute('apaterno')
                    ->addSearchableAttribute('amaterno')
                    ->orderBy("nombres", "ASC");


            })->registerModel(Iniciativa::class, function (ModelSearchAspect $modelSearchAspect) {
                $modelSearchAspect
                    ->addSearchableAttribute('folio')
                    ->addSearchableAttribute('iniciativa')
                    ->orderBy("Folio", "ASC");

            })
            ->registerModel(Comunicado::class, function (ModelSearchAspect $modelSearchAspect) {
                $modelSearchAspect
                    ->addSearchableAttribute('titulo')
                    ->addSearchableAttribute('texto')->orderBy("comunicado", "DESC");

            })->limitAspectResults(50)->perform($searchterm);
        return view('pages.search.result', compact('result', 'searchterm'));
    }
}
