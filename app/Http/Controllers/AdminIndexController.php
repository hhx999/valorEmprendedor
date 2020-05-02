<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Articulo;
use App\Mensaje;
use App\Categoria;



class AdminIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articulos = Articulo::all()->count();
        $mensajes = Mensaje::all()->count();
        $categorias = Categoria::all()->count();

        $ultimos_articulos = Articulo::orderBy('created_at','DESC')->take(4)->get();

        $ultimos_mensajes = Mensaje::orderBy('created_at','DESC')->take(4)->get();
        
        return view('admin.index',['articulos' => $articulos,'mensajes' => $mensajes, 'categorias' => $categorias, 'ultimos_mensajes' => $ultimos_mensajes, 'ultimos_articulos' => $ultimos_articulos]);
    }
}
