<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicidad extends Model
{
    //
    protected $fillable = ['nombre', 'imagen', 'publicidad_tipo_id'];
}
