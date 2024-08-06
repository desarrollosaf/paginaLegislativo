<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Comunicado;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ComunicadosProgramados extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comunicados:programados';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $date_now = now()->format('Y-m-d H:i');
        $comunicados = Comunicado::where('publicado',1)->get();
        if(count($comunicados)){
            foreach ($comunicados as $key => $value) {
                $nuevaFechaYHora = Carbon::createFromFormat('Y-m-d H:i:s', $value->fecha_publicacion)->format('Y-m-d H:i');
                if($nuevaFechaYHora == $date_now){
                    $value->update(['publicado' => 0]);
                }
                //$comunicados = Comunicado::whereDate('fecha_publicacion','=', $date)->get(); 
            }

        }else{
            $texto = "[". $date_now. "]:" . $comunicados;
            Storage::append("archivo.txt", $texto);
        }
       
    }
}
