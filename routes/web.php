<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [\App\Http\Controllers\IndexController::class, "index"]);
Route::get('/test', [\App\Http\Controllers\IndexController::class, "index"]);
Route::get("ReformaConstitucion", function () {
    echo '<script type="text/javascript">window.location.href = "https://legislacion.legislativoedomex.gob.mx/ReformaConstitucion"</script>';
});
Route::get("convocatoriacec", function () {
    echo '<script type="text/javascript">window.location.href = "https://legislacion.legislativoedomex.gob.mx/convocatoriacec"</script>';
});
//Route::get("basicos", function () {
//    echo '<script type="text/javascript">window.location.href = "https://legislacion.legislativoedomex.gob.mx/basicos"</script>';
//});
Route::get("asuntosparlamentarios/debates", function () {
    echo '<script type="text/javascript">window.location.href = "https://legislacion.legislativoedomex.gob.mx/asuntosparlamentarios/debates"</script>';
});

Route::resources([
    "diputadasydiputados" => \App\Http\Controllers\DiputadosController::class,
    "asuntos" => \App\Http\Controllers\AsuntosController::class,
    "sesiones" => \App\Http\Controllers\SesionesController::class,
    "boletin" => \App\Http\Controllers\ComunicadosController::class,
    "gaceta" => \App\Http\Controllers\GacetaController::class,
    "revista" => \App\Http\Controllers\RevistasController::class,
    "diputadas" => \App\Http\Controllers\DiputadasController::class,
//    "informe" => \App\Http\Controllers\InformeLaboresController::class,
    "basicos" => \App\Http\Controllers\BasicosController::class,
]);
Route::namespace('App\\Http\\Controllers')->group(function () {
    Route::get('/search', "SearchController")->name('search');

});

Route::post("get_diputados", [App\Http\Controllers\DiputadosController::class, 'getDiputados'])->name("get_diputados");
Route::post("search/integrante", [App\Http\Controllers\DiputadosController::class, 'searchDiputado'])->name("search_integrante");


Route::prefix("admin-mcg")->group(function () {
    Route::get('/', [\App\Http\Controllers\MCG\HomeController::class, 'index'])->name('home');
    Auth::routes();
    Route::middleware(['auth'])->group(function () {
        Route::get("xlsx_iniciativas", [App\Http\Controllers\MCG\IniciativasController::class, "iniciativasXlsx"])->name("iniciativasxls");
        Route::get("xlsx_puntosacu", [App\Http\Controllers\MCG\IniciativasController::class, "puntosAcuerdoXlsx"])->name("puntos_acuerdoxls");
        Route::resources([
            'diputados' => \App\Http\Controllers\MCG\DiputadosController::class,
            'iniciativas' => \App\Http\Controllers\MCG\IniciativasController::class,
            'sesion' => \App\Http\Controllers\MCG\SesionesController::class,
            'comunicados' => \App\Http\Controllers\MCG\ComunicadosController::class,
            'agenda' => \App\Http\Controllers\MCG\AgendaController::class,
            'banners' => \App\Http\Controllers\MCG\BannerController::class,
            'comision' => \App\Http\Controllers\MCG\ComisionesController::class,
            'diputada' => \App\Http\Controllers\MCG\DiputadasController::class,
            'informel' => \App\Http\Controllers\MCG\InformeController::class,
        ]);
        Route::post("get/comunicado", [App\Http\Controllers\MCG\ComunicadosController::class, 'getComunicado'])->name("comunicados.get_comunicado");
        Route::get("agenda/redirect/back", [App\Http\Controllers\MCG\AgendaController::class, 'redirectIndex'])->name("agenda.redirect");
        Route::get("comision/integrantes/{id}", [App\Http\Controllers\MCG\ComisionesController::class, 'editIntegrantes'])->name("comision.edit_integrantes");
        Route::post("get_cargo_dip", [App\Http\Controllers\MCG\ComisionesController::class, 'getCargoDip'])->name("get_cargo_dip");
        Route::put("save_integrantes_comision/{id}", [App\Http\Controllers\MCG\ComisionesController::class, 'saveIntegrantes'])->name("save_integrantes_comision");

        Route::get("comunicados/redirect/back", [\App\Http\Controllers\MCG\ComunicadosController::class, "redirect"])->name("comunicados.back");
        Route::get("informe/redirect/back", [\App\Http\Controllers\MCG\InformeController::class, "redirect"])->name("informe.back");
        Route::prefix("iniciativas")->group(function () {
            Route::post("decreto", [App\Http\Controllers\MCG\IniciativasController::class, 'createDecreto'])->name("iniciativas.create_decreto");
            Route::post("get/folio", [App\Http\Controllers\MCG\IniciativasController::class, 'getFolio'])->name("iniciativas.get_folio");
            Route::post("get/decreto", [App\Http\Controllers\MCG\IniciativasController::class, 'getDecreto'])->name("iniciativas.get_decreto");
            Route::get("redirect/back/{id}", [App\Http\Controllers\MCG\IniciativasController::class, 'redirectIndex'])->name("iniciativas.redirect");
            Route::get("delete-autor/{iniciativa}/{id}", [App\Http\Controllers\MCG\IniciativasController::class, 'deleteAutor']);
            Route::get("puntos/acuerdo", [App\Http\Controllers\MCG\IniciativasController::class, 'puntosIndex'])->name("iniciativas.puntos");
        });
        Route::prefix("comunicados")->group(function () {
            Route::post("foto", [App\Http\Controllers\MCG\ComunicadosController::class, 'createFoto'])->name("comunicados.create_foto");
            Route::post("get/foto", [App\Http\Controllers\MCG\IniciativasController::class, 'getFoto'])->name("comunicados.get_foto");
        });
        Route::prefix("informe")->group(function () {
            Route::post("foto", [App\Http\Controllers\MCG\InformeController::class, 'createFoto'])->name("informe.create_foto");
        });
    });
});
        Route::get('pruebaindex', [\App\Http\Controllers\InformeLaboresController::class, 'prueba'])->name("pruebaindex");
        Route::get('reconocimientodocente', [\App\Http\Controllers\InformeLaboresController::class, 'reconocimiento']);
        Route::get('consultamovilidad', [\App\Http\Controllers\InformeLaboresController::class, 'Leymovilidad']);
        Route::get('leymovilidad', [\App\Http\Controllers\InformeLaboresController::class, 'LeyMovilida']);
        Route::get('meritodocente2024', [\App\Http\Controllers\InformeLaboresController::class, 'meritodocente2024']);

//Route::get('/Informe/{parametro}', [\App\Http\Controllers\InformeLaboresController::class, 'mostrarNombre'])->name("get_informe_dip");

