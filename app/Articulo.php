<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    protected $fillable = ['titulo', 'subtitulo', 'copete', 'imagen','cuerpo', 'categoria_id','usuario_id'];
}