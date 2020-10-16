<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detalle_recolector extends Model
{
    use SoftDeletes;
    protected $table="detalle_recolector";
    protected $fillable=['id_recolector','id_puntoreciclaje'];
}