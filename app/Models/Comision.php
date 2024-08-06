<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Comision extends Model implements Searchable
{
    use HasFactory, Uuids;
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];

    public function foto()
    {
        return $this->morphOne(Foto::class, 'fotoable');
    }

    public function getSearchResult(): SearchResult
    {
        return new SearchResult($this, $this->nombre, route('index', $this->id));
    }

    public function integranteComision()
    {
        return $this->hasMany(IntegranteComision::class);
    }

    public function tipo()
    {
        return $this->belongsTo(TipoComision::class, "tipo_comision_id");
    }

    public function integrante()
    {
        return $this->hasMany(IntegranteComision::class, "comision_id");
    }
}
