<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientosDiputados extends Model
{
    use HasFactory, Uuids;
    protected $table = "movimientos_diputados";
    protected $guarded = ["id"];
    protected $primaryKey = "id";

    public function estatus()
    {
        return $this->belongsTo(EstatusDiputado::class, "estatus_diputado_id",  "id" );
    }
}
