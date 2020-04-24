<?php

namespace App\Http\Controllers;

use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Categoria;
use App\Articulo;
use App\SeccionesNav;
use App\Comentario;
use App\Apariencia;
use App\Publicidad;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $logo = Apariencia::find(1);
        $icono = Apariencia::find(2);

        $publicidades = Publicidad::all();

        $categorias = Categoria::all();
        $secciones = SeccionesNav::whereNotNull('categoria_id')->get();

        $ultimos_articulos = Articulo::orderBy('created_at','DESC')->take(4)->get();

        $articulos = Articulo::orderBy('created_at','DESC')->take(10)->get();

        return view('public.index',['secciones' => $secciones, 'ultimos_articulos' => $ultimos_articulos, 'categorias' => $categorias, 'articulos' => $articulos, 'logo' => $logo, 'icono' => $icono, 'publicidades' => $publicidades]);
    }
    public function verCategoria($categoria) {
        var_dump($categoria);
        
    }

    public function verArticulo($categoria,$articulo) {
        $articulo = Articulo::where('slug',$articulo)->first();
        return $articulo;
        
    }

    public function sobreNosotros()
    {
        echo "ola";
    }
    public function contacto()
    {
        echo "ola";
    }

    public function login()
    {
        echo "ola";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
