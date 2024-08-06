<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IntegranteComision extends Model
{
    use HasFactory, Uuids, SoftDeletes;
    protected $guarded = ["id"];

    public function comision()
    {
        return $this->belongsTo(Comision::class);
    }

    public function cargo()
    {
        return $this->belongsTo(TipoCargoComision::class, "tipo_cargo_comision_id","id")->orderBy("nivel","ASC");
    }

    public function integranteLegislatura()
    {
        return $this->belongsTo(IntegranteLegislatura::class);
    }

    public function order(){
        return $this->joiningTable(TipoCargoComision::class, "tipo_cargo_comision_id");
    }
}
