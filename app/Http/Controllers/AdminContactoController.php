<?php

namespace App\Http\Controllers;

use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Contacto;

class AdminContactoController extends Controller
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
    public function configurar(Request $request)
    {
        $contacto = Contacto::find(1);
        $sobreNosotros = Contacto::find(2);
        $facebook = Contacto::find(3);
        $instagram = Contacto::find(4);

        return view('admin.contacto.configurar', ['contacto' => $contacto, 'sobre_nosotros' => $sobreNosotros, 'facebook' => $facebook, 'instagram' => $instagram]);
    }
    public function configurarContacto(Request $request)
    {
        //
        DB::beginTransaction();
        try {
        $contacto = Contacto::find(1);
        $contacto->contenido = $request->contacto;
        $contacto->save();
        DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->with(['success' => 'Hubo un problema al crear el registro.']);
        }
        return redirect()->back()->with(['success' => 'Registro creado correctamente!']);
    }
    public function configurarNosotros(Request $request)
    {
        DB::beginTransaction();
        try {
        $nosotros = Contacto::find(2);
        $nosotros->contenido = $request->sobre_nosotros;
        $nosotros->save();
        DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->with(['success' => 'Hubo un problema al crear el registro.']);
        }
        return redirect()->back()->with(['success' => 'Registro creado correctamente!']);
    }
    public function configurarFacebook(Request $request)
    {
        DB::beginTransaction();
        try {
        $facebook = Contacto::find(3);
        $facebook->url = $request->facebook;
        $facebook->save();
        DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->with(['success' => 'Hubo un problema al crear el registro.']);
        }
        return redirect()->back()->with(['success' => 'Registro creado correctamente!']);
    }
    public function configurarInstagram(Request $request)
    {
        DB::beginTransaction();
        try {
        $instagram = Contacto::find(4);
        $instagram->url = $request->instagram;
        $instagram->save();
        DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->with(['success' => 'Hubo un problema al crear el registro.']);
        }
        return redirect()->back()->with(['success' => 'Registro creado correctamente!']);
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
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
