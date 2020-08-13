<?php

namespace App\Http\Controllers;

use DB;
use Exception;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Categoria;

class AdminCategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorias = Categoria::all();
        return view('admin.categorias.index', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categorias.create');
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
            $categoria = new Categoria;

            $slug = Str::slug($request->nombre,'-');
                if(Categoria::where('slug',$slug)->exists())
                    {
                        $slug = $slug . \uniqid();
                    }
                $categoria->slug = strtolower($slug);

            $categoria->nombre = $request->nombre;
            $categoria->descripcion = $request->descripcion;
            $categoria->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
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
        $categoria = Categoria::findOrFail($id);
        return view('admin.categorias.edit', ['categoria' => $categoria]);
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
            $categoria = Categoria::findOrFail($id);
            $categoria->nombre = $request->nombre;
            $categoria->descripcion = $request->descripcion;
            $categoria->save();
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
    public function delete(Request $request)
    {
        //
        Categoria::destroy($request->idEliminar);
        return redirect()->back()->with(['success' => 'Registro eliminado correctamente!']);
    }
}
