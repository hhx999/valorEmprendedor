<?php

namespace App\Http\Controllers;

use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Apariencia;

class AdminAparienciaController extends Controller
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
    public function configurar(Request $request)
    {
        $logo = Apariencia::find(1);
        $icono = Apariencia::find(2);
        return view('admin.apariencia.configurar', ['logo' => $logo, 'icono' => $icono]);
    }

    public function configurarLogo(Request $request)
    {
        DB::beginTransaction();
        try {
            $apariencia = Apariencia::find(1);
            $apariencia->save();

            //subimos la imagen del logo
                if($request->file('imagen')){
                    $path = Storage::disk('apariencia')->put('image',$request->file('imagen'));
                    //agregamos la imagen al registro del logo agregado
                    $apariencia->fill(['imagen' => $path])->save();
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
    public function configurarIcono(Request $request)
    {
        DB::beginTransaction();
        try {
            $apariencia = Apariencia::find(2);
            $apariencia->save();

            //subimos la imagen del logo
                if($request->file('imagen')){
                    $path = Storage::disk('apariencia')->put('image',$request->file('imagen'));
                    //agregamos la imagen al registro del logo agregado
                    $apariencia->fill(['imagen' => $path])->save();
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
            return redirect()->back()->with(['msg' => 'Hubo un problema al agregar el icono logo']);
        }
        return redirect()->back()->with(['msg' => 'Se ha agregado el icono  correctamente']);
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
}
