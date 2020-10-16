<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class recolector extends Model
{
    use SoftDeletes;
    protected $table="recolector";
    protected $fillable=['nombre','dias'];
}
