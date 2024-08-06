<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Foto extends Model
{
    use HasFactory, Uuids, SoftDeletes;
    protected $guarded = ["id"];
    protected $primaryKey = "id";

    public function fotoable()
    {
        return $this->morphTo();
    }
}
