<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;


class Diputado extends Model implements Searchable
{
    use HasFactory, Uuids, SoftDeletes;

    protected $table = "diputados";
    protected $guarded = ["id"];
    protected $primaryKey = "id";

    public function foto()
    {
        return $this->morphOne(Foto::class, 'fotoable');
    }

    public function integranteLegislatura()
    {
        return $this->hasOne(IntegranteLegislatura::class)->withTrashed();
    }

    public function estatusdip()
    {
        return $this->hasOne(MovimientosDiputados::class);
    }

    public function genero()
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'id');
    }

    public function getSearchResult(): SearchResult
    {
        return new SearchResult($this, $this->nombres, route('diputadasydiputados.show', $this->id));
    }

    public function getFullNameAttribute()
{
    return "{$this->nombres}{$this->apaterno}{$this->amaterno}";
}

}
