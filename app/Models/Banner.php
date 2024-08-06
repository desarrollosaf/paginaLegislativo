<?php

namespace App\Models;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use HasFactory, Uuids, SoftDeletes;
    protected $table = "banners";
    protected $guarded = ["id"];
    protected $primaryKey = "id";

    public function foto()
    {
        return $this->morphOne(Foto::class, 'fotoable');
    }
}
