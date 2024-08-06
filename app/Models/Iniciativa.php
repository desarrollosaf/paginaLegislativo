<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;


class Iniciativa extends Model implements Searchable
{
    use HasFactory, Uuids;

    protected $guarded = ["id"];

    public function autor()
    {
        return $this->hasMany(AutorIniciativa::class);
    }

    public function comision()
    {
        return $this->hasMany(ComisionIniciativa::class);
    }
    public function comisiones()
    {
        return $this->hasMany(IntegranteComision::class);
    }

    public function decreto()
    {
        return $this->hasMany(DecretoIniciativa::class);
    }

    public function acuerdo()
    {
        return $this->hasOne(AcuerdoIniciativa::class);
    }

    public function estatus()
    {
        return $this->hasMany(EstatusIniciativa::class);
    }

    public function getSearchResult(): SearchResult
    {
        return new SearchResult($this, $this->folio, route('diputadasydiputados.show', $this->id));
    }
}
