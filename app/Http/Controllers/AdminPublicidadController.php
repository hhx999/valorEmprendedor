<?php

namespace App\Http\Controllers;

use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Publicidad;
use App\PublicidadTipo;


class AdminPublicidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publicidades = Publicidad::all();

        return view('admin.publicidades.index', ['publicidades' => $publicidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipos = PublicidadTipo::all();


        return view('admin.publicidades.create',['tipos' => $tipos]);
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
        try {

            $publicidad = new Publicidad;

            $publicidad->nombre = $request->nombre;
            $publicidad->publicidad_tipo_id = $request->publicidad_tipo_id;
            $publicidad->save();

            //subimos la imagen del logo
                if($request->file('imagen')){
                    $path = Storage::disk('publicidades')->put('image',$request->file('imagen'));
                    //agregamos la imagen al registro del logo agregado
                    $publicidad->fill(['imagen' => $path])->save();
                }    
            //commiteamos los cambios en la bd
            DB::commit();
        } catch (Exception $e) {
            //volvemos los datos si ocurre un error
            DB::rollback();
            //estas lineas están comentadas pero sirven para obtener errores que pueden llegar a surgir se deben descomentar en caso de algún problema
            dd($e);
            /*exit();*/
            //a los usuarios le mostramos un mensaje si hubo un problema al enviar la petición
            return redirect()->back()->with(['msg' => 'Hubo un problema al agregar el logo']);
        }
        return redirect()->back()->with(['msg' => 'Se ha agregado el logo correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publicidad  $publicidad
     * @return \Illuminate\Http\Response
     */
    public function show(Publicidad $publicidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publicidad  $publicidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicidad $publicidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publicidad  $publicidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicidad $publicidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publicidad  $publicidad
     * @return \Illuminate\Http\Response
     */


    public function delete(Request $request)
    {
        //
        $publicidad = Publicidad::find($request->idEliminar);
        $publicidad->delete();

        return redirect()->back()->with(['msg' => 'Registro eliminado!']);
    }
}
