<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutorIniciativa extends Model
{
    use HasFactory, Uuids;

    protected $guarded = ["id", "created_at", "updated_at"];

    public function iniciativa()
    {
        return $this->belongsTo(Iniciativa::class);
    }

    public function tipo()
    {
        return $this->belongsTo(TipoAutor::class, "tipo_autor_id");
    }

    public function nivel()
    {
        return $this->belongsTo(NivelAutor::class, "nivel_autor_id")->wit;
    }

    public function getNameAttribute()
    {
        $model = app($this->tipo->model);
        $tipo = $this->tipo->valor;
        $name = $this->belongsTo($model, "autor_id", "id")->first();
        if ($tipo == "Municipio") {
            return $name->municipio;
        } elseif ($tipo == "Comision") {
            return $name->first()->nombre;
        } elseif ($tipo == "Partido") {
            return $name->nombre;
        } elseif ($tipo == "Otros") {
            return $name->valor;
        } elseif ($tipo == "Legislatura") {
            return $name->numero;
        } else {
            $name = app($this->tipo->model)->withTrashed()->find($this->autor_id);
//            dd($name);
            if (isset($name->diputado->nombres)) {
                $diputado = $name->diputado;
                return $diputado->nombres . " " . $diputado->apaterno . " " . $diputado->amaterno;
            } else {
                $diputado = $name->with(["diputado" => function ($q) {
                    $q->withTrashed();
                }])->first()->diputado;
                return $diputado->nombres . " " . $diputado->apaterno . " " . $diputado->amaterno;
            }
//            $diputado = $name->with(["diputado" => function ($q) {
//                $q->withTrashed();
//            }])->first()->diputado;
//            return $diputado->nombres . " " . $diputado->apaterno . " " . $diputado->amaterno;
//            $name = app($this->tipo->model)->withTrashed()->find($this->autor_id);
//            $diputado = $name->diputado;
//            return $diputado->nombres . " " . $diputado->apaterno . " " . $diputado->amaterno;
        }
    }

    public function getFotoFieldAutorAttribute()
    {
        $model = app($this->tipo->model);
        $tipo = $this->tipo->valor;
        $name = $this->belongsTo($model, "autor_id", "id")->first();
        if ($tipo == "Diputado (a)") {
            $name = app($this->tipo->model)->withTrashed()->find($this->autor_id);
            $diputado = $name;
            return $diputado->emblema;
        } elseif ($tipo == "Partido") {
            return $name->emblema;
        } else {
            return "/path/no";
        }
    }

    public function getNameFieldAttribute()
    {
        $model = app($this->tipo->model);
        $tipo = $this->tipo->valor;
        $name = $this->belongsTo($model, "autor_id", "id")->first();
        if ($tipo == "Municipio") {
            return $name->municipio;
        } elseif ($tipo == "Comision") {
            return $name->first()->nombre;
        } elseif ($tipo == "Partido") {
            return $name->nombre;
        } elseif ($tipo == "Otros") {
            return $name->valor;
        } elseif ($tipo == "Legislatura") {
            return $name->numero;
        } else {
            $name = app($this->tipo->model)->withTrashed()->find($this->autor_id);
            if (isset($name->diputado->nombres)) {
                $diputado = $name->diputado;
                return $diputado->nombres . " " . $diputado->apaterno . " " . $diputado->amaterno;
            } else {
                return "Not found";
            }
        }
    }

    public function getFotoAutorAttribute()
    {
        $model = app($this->tipo->model);
        $tipo = $this->tipo->valor;
        $name = $this->belongsTo($model, "autor_id", "id")->first();
        if ($tipo == "Diputado (a)") {
            $name = app($this->tipo->model)->withTrashed()->find($this->autor_id);
            if (isset($name->diputado->foto->path)) {
                return $name->diputado->foto->path;
            } else {
                return "/path/no";
            }
        } elseif ($tipo == "Partido") {
            return $name->emblema;
        } else {
            return "/path/no";
        }
    }
}
