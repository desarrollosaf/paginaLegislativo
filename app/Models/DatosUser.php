<?php

namespace App\Models;

use App\Models\Foto;
use App\Models\Genero;
use App\Models\User;
use App\Models\IntegranteLegislatura;
use App\Models\MovimientosDiputados;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DatosUser extends Model
{
    use HasFactory, Uuids;
    protected $guarded = ["id"];
    protected $primaryKey = "id";


    public function integranteLegislatura()
    {
        return $this->hasOne(IntegranteLegislatura::class, 'dato_user_id','id' )->withTrashed();
    }

    public function foto()
    {
        return $this->morphOne(Foto::class, 'fotoable');
    }

    public function estatusdip()
    {
        return $this->hasOne(MovimientosDiputados::class);
    }
    public function genero()
    {
        return $this->belongsTo(Genero::class, 'genero_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function certificado(){
        return $this->hasOne(Certificado::class, 'id_diputado');
    }

    public function turnos(){
        return $this->belongsTo(Turno::class,  'id', 'id_diputado');
    }

    public function getNameCAttribute()
    {
        return $this->nombres . ' ' . $this->apaterno . ' ' . $this->amaterno ;
    }

}
