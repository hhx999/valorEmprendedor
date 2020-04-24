<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Categoria;
use App\Articulo;
use App\Observers\ArticuloObserver;
use App\Observers\CategoriaObserver;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //Categoria::observe(CategoriaObserver::class);
        //Articulo::observe(ArticuloObserver::class);
    }
}
