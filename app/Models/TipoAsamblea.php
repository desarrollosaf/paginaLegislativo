<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoAsamblea extends Model
{
    use HasFactory, SoftDeletes, Uuids;
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];
}
