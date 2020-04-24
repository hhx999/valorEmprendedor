<?php

namespace App\Observers;

use App\Articulo;

use Illuminate\Support\Str;

class ArticuloObserver
{
    /**
     * Handle the articulo "created" event.
     *
     * @param  \App\Articulo  $articulo
     * @return void
     */
    public function saving(Articulo $articulo)
    {
        //
        $slug = Str::slug($articulo->titulo,'-');
        var_dump($articulo->id);
        if(Articulo::where('slug',$slug)->first())
        {
            $slug = $slug . \uniqid();
        }

        $articulo->slug = strtolower($slug);
    }
}
