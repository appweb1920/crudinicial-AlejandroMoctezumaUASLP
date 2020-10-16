<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class reciclaje extends Model
{
    use SoftDeletes;
    protected $table="reciclaje";
    protected $fillable=['tipo_basura','direccion','apertura','cierre'];
}
