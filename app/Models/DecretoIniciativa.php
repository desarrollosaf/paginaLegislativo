<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DecretoIniciativa extends Model
{
    use HasFactory, Uuids;

    protected $guarded = ["id", "updated_at", "created_at"];

    public function documento()
    {
        return $this->morphOne(Documento::class, "documentoable");
    }
}
