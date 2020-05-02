<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    protected $fillable = ['titulo', 'subtitulo', 'copete', 'imagen','cuerpo', 'categoria_id','usuario_id'];

    public function getTotalComentariosAttribute()
	{
	   return $this->hasMany('App\ComentarioExterno')->whereArticuloId($this->id)->count();

	}

	public function comentarios()
	{
		return $this->hasMany('App\ComentarioExterno')->whereArticuloId($this->id);
	}
	public function categoria()
	{
		return $this->belongsTo('App\Categoria','categoria_id');
	}
}