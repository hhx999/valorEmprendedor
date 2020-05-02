<?php

namespace App\Http\Controllers;

use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Categoria;
use App\Articulo;
use App\SeccionesNav;
use App\Comentario;
use App\Apariencia;
use App\Publicidad;
use App\Anuncio;
use App\Usuario;
use App\CategoriaMensaje;
use App\Contacto;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $logo = Apariencia::find(1);
        $icono = Apariencia::find(2);

        $facebook = Contacto::find(3);
        $instagram = Contacto::find(4);

        $categoria_mensajes = CategoriaMensaje::all();

        $publicidades = Publicidad::where('publicidad_tipo_id',2)->get(); 
        $publicidad_header = Publicidad::where('publicidad_tipo_id',1)->orderBy('created_at','DESC')->first();
        
        $ultimos_anuncios = Anuncio::orderBy('created_at','DESC')->take(5)->get();

        $categorias = Categoria::all();
        $secciones = SeccionesNav::whereNotNull('categoria_id')->get();

        $ultimos_articulos = Articulo::orderBy('created_at','DESC')->take(4)->get();


        $articulos = Articulo::orderBy('created_at','DESC')->take(10)->get();

        return view('index',['secciones' => $secciones, 'ultimos_articulos' => $ultimos_articulos, 'categorias' => $categorias, 'articulos' => $articulos, 'logo' => $logo, 'icono' => $icono, 'publicidades' => $publicidades,'ultimos_anuncios' => $ultimos_anuncios,'publicidad_header' => $publicidad_header, 'categoria_mensajes' => $categoria_mensajes, 'facebook' => $facebook, 'instagram' => $instagram]);
    }

    public function verArticulo($categoria,$articulo) {
        $articulo = Articulo::where('slug',$articulo)->firstOrFail();
        $categoria_mensajes = CategoriaMensaje::all();
        $comentarios = $articulo->comentarios;

        $logo = Apariencia::find(1);
        $icono = Apariencia::find(2);

        $facebook = Contacto::find(3);
        $instagram = Contacto::find(4);

        $secciones = SeccionesNav::whereNotNull('categoria_id')->get();

        $ultimos_articulos = Articulo::where('categoria_id',$articulo->categoria_id)->where('id', '!=', $articulo->id)->orderBy('created_at','DESC')->take(4)->get();
        
        $publicidades = Publicidad::where('publicidad_tipo_id',2)->get(); 
        $publicidad_header = Publicidad::where('publicidad_tipo_id',1)->orderBy('created_at','DESC')->first();

        return view('articulos_publico.index', ['articulo' => $articulo, 'logo' => $logo, 'icono' => $icono, 'publicidades' => $publicidades, 'publicidad_header' => $publicidad_header, 'ultimos_articulos' => $ultimos_articulos, 'secciones' => $secciones ,'comentarios' => $comentarios, 'categoria_mensajes' => $categoria_mensajes, 'facebook' => $facebook, 'instagram' => $instagram]);
    }

    public function obtenerCategoria($categoria) {
        $logo = Apariencia::find(1);
        $icono = Apariencia::find(2);

        $facebook = Contacto::find(3);
        $instagram = Contacto::find(4);
        
        $categoria_mensajes = CategoriaMensaje::all();

        $publicidades = Publicidad::where('publicidad_tipo_id',2)->get(); 
        $publicidad_header = Publicidad::where('publicidad_tipo_id',1)->orderBy('created_at','DESC')->first();

        $secciones = SeccionesNav::whereNotNull('categoria_id')->get();

        $categoria = Categoria::where('slug',$categoria)->first();
        $articulos = $categoria->articulos;

        return view('categorias_publico.index', ['categoria' => $categoria, 'articulos' => $articulos ,'logo' => $logo, 'icono' => $icono, 'publicidades' => $publicidades, 'secciones' => $secciones, 'publicidad_header' => $publicidad_header, 'categoria_mensajes' => $categoria_mensajes, 'facebook' => $facebook, 'instagram' => $instagram]);
    }
    public function sobreNosotros()
    {
        $logo = Apariencia::find(1);
        $icono = Apariencia::find(2);

        $facebook = Contacto::find(3);
        $instagram = Contacto::find(4);
        
        $publicidad_header = Publicidad::where('publicidad_tipo_id',1)->orderBy('created_at','DESC')->first();
        
        $sobreNosotros = Contacto::find(2);
        
        $categoria_mensajes = CategoriaMensaje::all();
        $secciones = SeccionesNav::whereNotNull('categoria_id')->get();
        
        return view('sobre_nosotros', ['sobre_nosotros' => $sobreNosotros, 'logo' => $logo,'icono' => $icono,'facebook' => $facebook, 'instagram' => $instagram,'publicidad_header' => $publicidad_header,'categoria_mensajes' => $categoria_mensajes,'secciones' => $secciones]);
    }
    public function contacto()
    {   
        $logo = Apariencia::find(1);
        $icono = Apariencia::find(2);

        $facebook = Contacto::find(3);
        $instagram = Contacto::find(4);

        $categoria_mensajes = CategoriaMensaje::all();
        $secciones = SeccionesNav::whereNotNull('categoria_id')->get();
        
        $publicidad_header = Publicidad::where('publicidad_tipo_id',1)->orderBy('created_at','DESC')->first();
        $contacto = Contacto::find(1);
        return view('contacto', ['contacto' => $contacto, 'logo' => $logo,'icono' => $icono,'facebook' => $facebook, 'instagram' => $instagram,'publicidad_header' => $publicidad_header,'categoria_mensajes' => $categoria_mensajes,'secciones' => $secciones]);
    }

    public function usuarioLogin(Request $request){
        $logo = Apariencia::find(1);
        $icono = Apariencia::find(2);
        $facebook = Contacto::find(3);
        $instagram = Contacto::find(4);

        $categoria_mensajes = CategoriaMensaje::all();

        $secciones = SeccionesNav::whereNotNull('categoria_id')->get();
        
        $publicidades = Publicidad::where('publicidad_tipo_id',2)->get(); 
        $publicidad_header = Publicidad::where('publicidad_tipo_id',1)->orderBy('created_at','DESC')->first();

        if ($request->session()->get('usuario_id')) {
            return redirect(url('/'));
                      exit();
         }
      $msgError = NULL;
      if ($request->isMethod('post'))
      {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (!empty($request->input('email'))) {
          try {
            $usuario = Usuario::where('email', $request->input('email') )->first();
            if ($usuario) {
              $password = $usuario->password;
                if (Hash::check($request->input('password'), $password)) {
                  $session = $request->session();
                  $session->put('usuario_id', $usuario->id);
                  $session->put('nombre',$usuario->nombre." ".$usuario->apellido);
                  $session->put('cargo', $usuario->cargo->nombre);
                  return redirect(url('/')); // redirige a la página principal
                  // financiamiento para la primer versión
                  // usuarioIndex -- para su versión con capacitaciones integrado
                    exit();
                } else {
                  $msgError = "Password incorrecto";
                }
            } else {
              $msgError = "Usuario incorrecto";
            }
          } catch (\Illuminate\Database\QueryException $e) {
            $msgError = "Algo funcionó mal, por favor comunique el problema al webmaster.";
          }
        }
      }
      return view('login', ["msg" => $msgError , 'logo' => $logo, 'icono' => $icono, 'publicidades' => $publicidades, 'secciones' => $secciones, 'publicidad_header' => $publicidad_header, 'categoria_mensajes' => $categoria_mensajes , 'facebook' => $facebook, 'instagram' => $instagram]);
    }

    public function logout(Request $request)
    {
      $request->session()->forget('usuario_id');
      $request->session()->forget('nombre');
      $request->session()->forget('cargo');
      $request->session()->flush();
      return redirect(url('/'));
      exit();
    }
}
