<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentarioExterno extends Model
{
    //
    protected $fillable = ['nombre', 'email', 'contenido','articulo_id'];
}
