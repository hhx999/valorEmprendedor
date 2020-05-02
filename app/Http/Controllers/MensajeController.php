<?php

namespace App\Http\Controllers;

use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Mensaje;

class MensajeController extends Controller
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
        DB::beginTransaction();
        $msg = NULL;
        try {
            $mensaje = new Mensaje;
            $mensaje->nombre = $request->nombre;
            $mensaje->email = $request->email;
            $mensaje->contenido = $request->contenido;
            $mensaje->categoria_mensaje_id = $request->categoria_mensaje_id;
            $mensaje->save();

            DB::commit();

            $msg = 'El mensaje ha sido enviado con éxito!';
        } catch (Exception $e) {
            DB::rollback();
            dd($e);
            exit();
            $msg = 'Ha ocurrido un error al enviar el mensaje';
        }
        return $msg;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function show(Mensaje $mensaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Mensaje $mensaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mensaje $mensaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mensaje $mensaje)
    {
        //
    }
}
