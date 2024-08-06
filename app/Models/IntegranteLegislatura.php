<?php

namespace App\Models;

use App\Traits\Uuids;
use Carbon\Carbon;
use Database\Seeders\LegislaturaSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IntegranteLegislatura extends Model
{
    use HasFactory, Uuids, SoftDeletes;

    protected $table = "integrante_legislaturas";
    protected $guarded = ["id"];
    protected $primaryKey = "id";

    public function partido()
    {
        return $this->belongsTo(Partido::class);
    }

    public function distrito()
    {
        return $this->belongsTo(Distrito::class);
    }

//    public function diputado()
//    {
//        return $this->belongsTo(Diputado::class);
//    }
    public function diputado()
    {
        return $this->belongsTo(DatosUser::class, "dato_user_id");
    }

    public function comisiones()
    {
        return $this->hasMany(IntegranteComision::class);
    }

    public function getNombreFieldAttribute()
    {
        return $this->diputado->nombres . " " . $this->diputado->apaterno . " " . $this->diputado->amaterno;
    }

    public function autor()
    {
        return $this->hasMany(AutorIniciativa::class, "autor_id", "id");
    }

    public function anfitrion()
    {
        return $this->hasMany(AnfitrionAgenda::class, "autor_id");
    }

    public function autorcomunicado()
    {
        return $this->hasMany(AutorComunicado::class, "autor_id", "id");
    }

    public function legislatura()
    {
        return $this->belongsTo(Legislatura::class,);
    }

    public function diputada()
    {
        return $this->hasOne(Diputadas::class, "integrante_legislatura_id", "id");
    }

    public function informe()
    {
        return $this->hasOne(Informes::class, "integrante_legislatura_id", "id");
    }

}
