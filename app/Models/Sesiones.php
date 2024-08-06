<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesiones extends Model
{
    use HasFactory, Uuids;

    protected $guarded = ["id", "created_at", "updated_at"];

    public function periodo()
    {
        return $this->belongsTo(PeriodoSesion::class, "periodo_id", "id");
    }

    public function anio()
    {
        return $this->belongsTo(AnioSesion::class, "anio_id", "id");
    }

    public function tipsesion()
    {
        return $this->belongsTo(TipoSesion::class, "tipo_sesion_id", "id");
    }

    public function legislatura()
    {
        return $this->belongsTo(Legislatura::class, "legislatura_id", "id");
    }

    public function agenda()
    {
        return $this->hasOne(SesionAgenda::class);
    }
    public function asamblea()
    {
        return $this->belongsTo(TipoAsamblea::class, "tipo_asamblea_id");
    }
}
