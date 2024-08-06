<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;

class DescripcionesComunicado extends Model
{
    use HasFactory, Uuids, SoftDeletes;
    protected $table = "descripcione_comunicados";
    protected $guarded = ["id"];
    protected $primaryKey = "id";
}
