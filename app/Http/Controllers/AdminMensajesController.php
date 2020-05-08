<?php

namespace App\Http\Controllers;

use App\Mensaje;
use Illuminate\Http\Request;

class AdminMensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mensajes = Mensaje::all();

        return view('admin.mensajes.index', ['mensajes' => $mensajes]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensaje = Mensaje::findOrFail($id);

        return view('admin.mensajes.show', ['mensaje' => $mensaje]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        //
        $mensaje = Mensaje::find($request->idEliminar);
        $mensaje->delete();
        return redirect()->back()->with('success', 'El mensaje ha sido eliminado correctamente!');
    }
}
