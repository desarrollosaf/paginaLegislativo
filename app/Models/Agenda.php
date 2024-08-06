<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agenda extends Model
{
    use HasFactory, Uuids, SoftDeletes;

    protected $guarded = ["id", "created_at", "updated_at"];

    public function anfitrion()
    {
        return $this->hasMany(AnfitrionAgenda::class);
    }

    public function sedes()
    {
        return $this->belongsTo(Sede::class, "sede_id");
    }

}
