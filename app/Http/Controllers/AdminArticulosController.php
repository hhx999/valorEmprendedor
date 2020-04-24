<?php

namespace App\Http\Controllers;
use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


use App\Articulo;
use App\Categoria;
use App\Multimedia;
use App\ArtPortada;


class AdminArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articulos = Articulo::all();
        return view('admin.articulos.index', ['articulos' => $articulos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias = Categoria::all();
        return view('admin.articulos.create', ['categorias' => $categorias]);
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
        $usuario_id = 1;
        /*$validatedData = $request->validate([
            'imagen' => 'required|dimensions:min_width=100,min_height=200|max:2000',
                'nombre' => 'required',
                'precio' => 'required',
                'stock' => 'required',
                'categoria_producto_id' => 'required',
                'descripcion' => 'required',
            ]);*/ 
        DB::beginTransaction();
        try {
            $articulo = new Articulo;

            $slug = Str::slug($request->titulo,'-');
                if(Articulo::where('slug',$slug)->exists())
                {
                    $slug = $slug . \uniqid();
                }

                $articulo->slug = strtolower($slug);

            $articulo->titulo = $request->titulo;
            $articulo->subtitulo = $request->subtitulo;
            $articulo->copete = $request->copete;
            $articulo->cuerpo = $request->cuerpo;
            $articulo->categoria_id = $request->categoria;
            $articulo->usuario_id = $usuario_id;
            $articulo->save();

            //subimos la imagen de portada
            if($request->file('imagen')){
                $path = Storage::disk('portadas')->put('image',$request->file('imagen'));
                //agregamos la imagen al registro del articulo agregado
                $articulo->fill(['imagen' => $path])->save();
            }    
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            dd($e);
            exit();
            return redirect()->back()->with(['success' => 'Hubo un problema al crear el registro.']);
        }
        return redirect()->back()->with(['success' => 'Registro creado correctamente!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $articulo = Articulo::findOrFail($id);
        return view('admin.articulos.edit', ['articulo' => $articulo]);
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
        DB::beginTransaction();
        try {
            $articulo = Articulo::findOrFail($id);
            $articulo->nombre = $request->nombre;
            $articulo->descripcion = $request->descripcion;
            $articulo->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->with(['success' => 'Hubo un problema al crear el registro.']);
        }
        return redirect()->back()->with(['success' => 'Registro actualizado correctamente!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        Articulo::destroy($request->idEliminar);
        return redirect()->back()->with(['success' => 'Registro eliminado correctamente!']);
    }
}
