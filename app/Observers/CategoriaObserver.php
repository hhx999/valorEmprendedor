<?php

namespace App\Observers;

use App\Categoria;

use Illuminate\Support\Str;

class CategoriaObserver
{
    /**
     * Handle the categoria "created" event.
     *
     * @param  \App\Categoria  $categoria
     * @return void
     */
    public function saving(Categoria $categoria)
    {
        //
        $slug = Str::slug($categoria->nombre,'-');
        if(Categoria::where('slug',$slug)->exists())
            {
                $slug = $slug . \uniqid();
            }
        $categoria->slug = strtolower($slug);
    }
    public function created(Categoria $categoria)
    {
        //
    }

    /**
     * Handle the categoria "updated" event.
     *
     * @param  \App\Categoria  $categoria
     * @return void
     */
    public function updated(Categoria $categoria)
    {
        //
    }

    /**
     * Handle the categoria "deleted" event.
     *
     * @param  \App\Categoria  $categoria
     * @return void
     */
    public function deleted(Categoria $categoria)
    {
        //
    }

    /**
     * Handle the categoria "restored" event.
     *
     * @param  \App\Categoria  $categoria
     * @return void
     */
    public function restored(Categoria $categoria)
    {
        //
    }

    /**
     * Handle the categoria "force deleted" event.
     *
     * @param  \App\Categoria  $categoria
     * @return void
     */
    public function forceDeleted(Categoria $categoria)
    {
        //
    }
}
