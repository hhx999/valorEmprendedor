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

Route::get('/sobre-nosotros','IndexController@sobreNosotros');
Route::get('/contacto','IndexController@contacto');
Route::get('/inicio-sesion','IndexController@login');

//InicioIndex
Route::get('/admin','AdminIndexController@index');

//Articulos
//Route::get('/{$categoria}/{$}','IndexController@verArticulo');
Route::get('/{categoria}/{articulo}', 'IndexController@verArticulo');

//SECCIÓN ADMINISTRACIÓN

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
Route::get('/admin/articulos/edit/{id}','AdminArticulosController@delete')->name('eliminarArticulo');

//Sección de consultas

Route::get('/admin/consultas/index','AdminConsultasController@index');
Route::get('/admin/consultas/create','AdminConsultasController@create');
Route::get('/admin/consultas/edit/{id}','AdminConsultasController@edit');
Route::get('/admin/consultas/delete/{id}','AdminConsultasController@delete');

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
Route::get('/admin/usuarios/delete/{id}','AdminUsuariosController@delete');

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


