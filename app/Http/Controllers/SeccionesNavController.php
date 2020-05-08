<?php

namespace App\Http\Controllers;
use DB;
use Exception;

use App\SeccionesNav;
use App\Categoria;

use Illuminate\Http\Request;

class SeccionesNavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $secciones = SeccionesNav::all();
        return view('admin.secciones.index',['secciones' => $secciones]);
    }

    public function configurar()
    {
        $secciones = SeccionesNav::all();
        $categorias = Categoria::all();
        return view('admin.secciones.configurar',['secciones' => $secciones, 'categorias' => $categorias]);
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
     * @param  \App\SeccionesNav  $seccionesNav
     * @return \Illuminate\Http\Response
     */
    public function show(SeccionesNav $seccionesNav)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SeccionesNav  $seccionesNav
     * @return \Illuminate\Http\Response
     */
    public function edit(SeccionesNav $seccionesNav)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SeccionesNav  $seccionesNav
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        DB::beginTransaction();
        try {
            for ($i=0; $i < count($request->id); $i++) { 
                if($request->categoria_id[$i] != 0)
                {
                    $seccion = SeccionesNav::find($request->id[$i]);
                    
                    $seccion->titulo = $request->titulo[$i];
                    $seccion->categoria_id = intval($request->categoria_id[$i]);
                    $seccion->save();

                } else {
                    $seccion = SeccionesNav::find($request->id[$i]);
                    $seccion->titulo = NULL;
                    $seccion->categoria_id = NULL;
                    $seccion->save();
                }
            }
        DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            dd($e);
            //exit();
        }
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SeccionesNav  $seccionesNav
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeccionesNav $seccionesNav)
    {
        //
    }
}
