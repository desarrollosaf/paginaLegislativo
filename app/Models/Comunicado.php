<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Comunicado extends Model implements Searchable
{
    use HasFactory, Uuids, SoftDeletes;

    protected $table = "comunicados";
    protected $guarded = ["id"];
    protected $primaryKey = "id";

    public function autor()
    {
        return $this->hasMany(AutorComunicado::class);
    }

    public function foto()
    {
        return $this->morphMany(Foto::class, 'fotoable');
    }

    public function descripcionComunicado()
    {
        return $this->hasMany(DescripcionesComunicado::class);
    }

    public function getSearchResult(): SearchResult
    {
        return new SearchResult($this, $this->titulo, route('comunicados.index', $this->id));
    }
}
