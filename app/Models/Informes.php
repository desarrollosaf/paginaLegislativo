<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Searchable\SearchResult;

class Informes extends Model
{
    use HasFactory, Uuids, SoftDeletes;

    protected $table = "informes";
    protected $guarded = ["id"];
    protected $primaryKey = "id";

    public function foto()
    {
        return $this->morphMany(Foto::class, 'fotoable');
    }

    public function leyesInforme()
    {
        return $this->hasMany(LeyesInformes::class);
    }

    public function integrante()
    {
        return $this->hasOne(IntegranteLegislatura::class, 'id', 'integrante_legislatura_id')->withTrashed();
    }
}
