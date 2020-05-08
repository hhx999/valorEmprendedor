<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


// SECCION DE USUARIOS

//Inicio
Route::get('/','IndexController@index');

Route::post('comentario','ComentarioController@store')->name('agregarComentario');

Route::get('/sobre-nosotros','IndexController@sobreNosotros');
Route::get('/contacto','IndexController@contacto');
Route::get('/inicio-sesion','IndexController@usuarioLogin');
Route::post('/inicio-sesion','IndexController@usuarioLogin')->name('ingresoUsuario');

Route::post('/enviar-mensaje','MensajeController@store')->name('enviarMensaje');

//Articulos
Route::get('/categoria/{slug}','IndexController@obtenerCategoria')->name('verCategoria');
Route::get('/articulo/{categoria}/{articulo}', 'IndexController@verArticulo');

Route::get('/logout','IndexController@logout');

//SECCIÓN ADMINISTRACIÓN
Route::group(['middleware' => ['checkrole:administrador']], function () {

	//Inicio ADMIN
	Route::get('/admin/dashboard/index','AdminIndexController@index');

	//Configuración de las secciones vistas en la navbar
	Route::get('/admin/secciones','SeccionesNavController@index');
	Route::get('/admin/secciones/configurar','SeccionesNavController@configurar');
	Route::post('/admin/secciones/configurar','SeccionesNavController@update')->name('configurarSecciones');
	Route::get('/admin/seccion/editar{$id}','SeccionesNavController@edit')->name('editarSeccion');

	// Sección de artículos

	Route::get('/admin/articulos/index','AdminArticulosController@index');
	Route::get('/admin/articulos/create','AdminArticulosController@create');
	Route::post('/admin/articulos/create','AdminArticulosController@store')->name('agregarArticulo');
	Route::get('/admin/articulos/edit/{id}','AdminArticulosController@edit')->name('editarArticulo');
	Route::post('/admin/articulos/delete','AdminArticulosController@delete')->name('eliminarArticulo');

	//Sección de consultas

	Route::get('/admin/consultas/index','AdminConsultasController@index');
	Route::get('/admin/consultas/create','AdminConsultasController@create')->name('agregarConsulta');
	Route::get('/admin/consultas/edit/{id}','AdminConsultasController@edit')->name('editarConsulta');
	Route::post('/admin/consultas/delete','AdminConsultasController@delete')->name('eliminarConsulta');

	//Sección de categorías

	Route::get('/admin/categorias/index','AdminCategoriasController@index');
	Route::get('/admin/categorias/create','AdminCategoriasController@create');
	Route::post('/admin/categorias/create','AdminCategoriasController@store')->name('agregarCategoria');
	Route::get('/admin/categorias/edit/{id}','AdminCategoriasController@edit')->name('editarCategoria');
	Route::post('/admin/categorias/update/{id}','AdminCategoriasController@update')->name('actualizarCategoria');
	Route::post('/admin/categorias/delete','AdminCategoriasController@destroy')->name('eliminarCategoria');

	//Sección de rubros

	Route::get('/admin/rubros/index','AdminRubrosController@index');
	Route::get('/admin/rubros/create','AdminRubrosController@create');
	Route::get('/admin/rubros/edit/{id}','AdminRubrosController@edit');
	Route::get('/admin/rubros/delete/{id}','AdminRubrosController@delete');

	//Sección de usuarios

	Route::get('/admin/usuarios/index','AdminUsuariosController@index');
	Route::get('/admin/usuarios/create','AdminUsuariosController@create');
	Route::get('/admin/usuarios/edit/{id}','AdminUsuariosController@edit');
	Route::post('/admin/usuarios/delete','AdminUsuariosController@delete');

	//Sección de apariencia

	Route::get('/admin/apariencia/index','AdminAparienciaController@index');
	Route::get('/admin/apariencia/configurar','AdminAparienciaController@configurar');
	Route::post('/admin/apariencia/configurarLogo','AdminAparienciaController@configurarLogo')->name('agregar-logo');
	Route::post('/admin/apariencia/configurarIcono','AdminAparienciaController@configurarIcono')->name('agregar-icono');
	Route::get('/admin/apariencia/edit/{id}','AdminAparienciaController@edit');

	//Sección de publicidad

	Route::get('/admin/publicidad/index','AdminPublicidadController@index');
	Route::get('/admin/publicidad/create','AdminPublicidadController@create');
	Route::post('/admin/publicidad/store','AdminPublicidadController@store')->name('agregarPublicidad');
	Route::get('/admin/publicidad/edit/{id}','AdminPublicidadController@edit')->name('editarPublicidad');
	Route::post('/admin/publicidad/edit','AdminPublicidadController@update');
	Route::post('/admin/publicidad/delete','AdminPublicidadController@delete')->name('eliminarPublicidad');

	//Sección de anuncios

	Route::get('/admin/anuncios/index','AdminAnuncioController@index');
	Route::get('/admin/anuncios/create','AdminAnuncioController@create');
	Route::get('/admin/anuncios/edit','AdminAnuncioController@edit');
	Route::post('/admin/anuncios/store','AdminAnuncioController@store')->name('agregarAnuncio');
	Route::post('/admin/anuncios/update','AdminAnuncioController@index')->name('editarAnuncio');
	Route::post('/admin/anuncios/delete','AdminAnuncioController@index')->name('eliminarAnuncio');

	//Sección de contacto

	Route::get('/admin/contacto/configurar','AdminContactoController@configurar');
	Route::post('/admin/contacto/configurarContacto','AdminContactoController@configurarContacto')->name('configurarContacto');
	Route::post('/admin/contacto/configurarNosotros','AdminContactoController@configurarNosotros')->name('configurarNosotros');
	Route::post('/admin/contacto/configurarFacebook','AdminContactoController@configurarFacebook')->name('configurarFacebook');
	Route::post('/admin/contacto/configurarInstagram','AdminContactoController@configurarInstagram')->name('configurarInstagram');

	Route::get('/admin/mensajes/index','AdminMensajesController@index');
	Route::get('/admin/mensajes/show/{id}','AdminMensajesController@show');
	Route::post('/admin/mensajes/eliminar','AdminMensajesController@delete')->name('eliminarMensaje');
});