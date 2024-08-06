<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoComision extends Model
{
    use HasFactory, Uuids;

    public function comision()
    {
        return $this->hasMany(Comision::class);
    }
}
