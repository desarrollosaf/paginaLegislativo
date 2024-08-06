<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnfitrionAgenda extends Model
{
    use HasFactory, Uuids, SoftDeletes;

    protected $guarded = ["id", "created_at", "updated_at"];

    public function tipo()
    {
        return $this->belongsTo(TipoAutor::class, "tipo_autor_id");
    }

    public function getNameAttribute()
    {
        $model = app($this->tipo->model);
        $tipo = $this->tipo->valor;
        $name = $this->belongsTo($model, "autor_id", "id")->first();
        if ($tipo == "Municipio") {
            return $name->municipio;
        } elseif ($tipo == "Comision") {
            return $name->nombre;
        } elseif ($tipo == "Partido") {
            return $name->nombre;
        } elseif ($tipo == "Otros") {
            return $name->valor;
        } elseif ($tipo == "Legislatura") {
            return $name->numero;
        } else {
            return $name->diputado->nombres . " " . $name->diputado->apaterno . " " . $name->diputado->amaterno;
        }
    }
}
