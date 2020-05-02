<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    //
    public function categoria()
	{
		return $this->belongsTo('App\CategoriaMensaje','categoria_mensaje_id');
	}
}
