<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SesionAgenda extends Model
{
    use HasFactory, Uuids, SoftDeletes;
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];

    public function agenda()
    {
        return $this->belongsTo(Agenda::class);
    }
}
