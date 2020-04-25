<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    //
    protected $fillable = ['titulo', 'fecha', 'horario', 'descripcion', 'imagen', 'localidad_id', 'anuncio_tipo_id'];
    public function localidad()
	{
		return $this->belongsTo('App\Localidad','localidad_id');
	}
	public function tipo_anuncio()
	{
		return $this->belongsTo('App\AnuncioTipo','anuncio_tipo_id');
	}
}

