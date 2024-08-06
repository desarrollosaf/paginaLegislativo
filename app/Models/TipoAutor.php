<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAutor extends Model
{
    use HasFactory, Uuids;

    protected $guarded = ["id"];

    public function diputado()
    {
        return $this->belongsTo(Diputado::class);
    }

}
