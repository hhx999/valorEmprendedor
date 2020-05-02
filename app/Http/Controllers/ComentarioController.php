<?php

namespace App\Http\Controllers;

use App\ComentarioExterno;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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
        $comentario = new ComentarioExterno;
        $comentario->nombre = $request->nombre;
        $comentario->email = $request->email;
        $comentario->contenido = $request->contenido;
        $comentario->articulo_id = $request->articulo_id;
        $comentario->save();
        return redirect()->back()->with(['msg' => 'Comentario agregado!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComentarioExterno  $comentarioExterno
     * @return \Illuminate\Http\Response
     */
    public function show(ComentarioExterno $comentarioExterno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComentarioExterno  $comentarioExterno
     * @return \Illuminate\Http\Response
     */
    public function edit(ComentarioExterno $comentarioExterno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComentarioExterno  $comentarioExterno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComentarioExterno $comentarioExterno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComentarioExterno  $comentarioExterno
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComentarioExterno $comentarioExterno)
    {
        //
    }
}
