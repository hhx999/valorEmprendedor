<?php

namespace App\Http\Controllers;

use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Anuncio;
use App\Localidad;
use App\AnuncioTipo;

class AdminAnuncioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $anuncios = Anuncio::all();

        return view('admin.anuncios.index', ['anuncios' => $anuncios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $localidades = Localidad::all();
        $anuncio_tipos = AnuncioTipo::all();

        return view('admin.anuncios.create',['localidades' => $localidades,'anuncios' => $anuncio_tipos]);
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
            $anuncio = new Anuncio;
            //$anuncio->create($request->all());
            $anuncio->titulo = $request->titulo;
            $anuncio->fecha = $request->fecha;
            $anuncio->horario = $request->horario;
            $anuncio->lugar = $request->lugar;
            $anuncio->localidad_id = $request->localidad_id;
            $anuncio->anuncio_tipo_id = $request->anuncio_tipo_id;
            $anuncio->descripcion = $request->descripcion;
            $anuncio->save();
            if($request->file('imagen')){
                    $path = Storage::disk('anuncios')->put('image',$request->file('imagen'));
                    //agregamos la imagen al registro del anuncio agregado
                    $anuncio->fill(['imagen' => $path])->save();
                }   
             //commiteamos los cambios en la bd
            DB::commit();
        }
        catch (Exception $e) {
            //volvemos los datos si ocurre un error
            DB::rollback();
            //estas lineas están comentadas pero sirven para obtener errores que pueden llegar a surgir se deben descomentar en caso de algún problema
            dd($e);
            /*exit();*/
            //a los usuarios le mostramos un mensaje si hubo un problema al enviar la petición
            return redirect()->back()->with(['msg' => 'Hubo un problema al agregar el anuncio']);
        }
    return redirect()->back()->with(['msg' => 'Se ha agregado el anuncio correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $anuncio = Anuncio::find($id);

        return view('admin.anuncios.show',['anuncio' => $anuncio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function edit(Anuncio $anuncio)
    {
        //
        $anuncio = Anuncio::find($id);

        return view('admin.anuncios.show',['anuncio' => $anuncio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        DB::beginTransaction();
        try {
            $anuncio = Anuncio::find($request->anuncio_id);
            $anuncio->fill($request->all());
            if($request->file('imagen')){
                    $path = Storage::disk('anuncios')->put('image',$request->file('imagen'));
                    //agregamos la imagen al registro del anuncio agregado
                    $anuncio->fill(['imagen' => $path])->save();
                }   
             //commiteamos los cambios en la bd
            DB::commit();
        }
        catch (Exception $e) {
            //volvemos los datos si ocurre un error
            DB::rollback();
            //estas lineas están comentadas pero sirven para obtener errores que pueden llegar a surgir se deben descomentar en caso de algún problema
            dd($e);
            /*exit();*/
            //a los usuarios le mostramos un mensaje si hubo un problema al enviar la petición
            return redirect()->back()->with(['msg' => 'Hubo un problema al agregar el anuncio']);
        }
    return redirect()->back()->with(['msg' => 'Se ha agregado el anuncio correctamente']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        //
        $anuncio = Anuncio::findOrFail($request->anuncio_id);
        $anuncio->delete();

        return redirect()->back()->with(['msg' => 'Se ha eliminado correctamente el anuncio!']);
    }
}
