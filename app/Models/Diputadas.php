<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diputadas extends Model
{
    use HasFactory, Uuids, SoftDeletes;
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];

    public function integrante(){
        return $this->belongsTo(IntegranteLegislatura::class, "integrante_legislatura_id");
    }
}
