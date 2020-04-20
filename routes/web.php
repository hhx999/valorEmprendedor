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

//InicioIndex
Route::get('/admin','AdminIndexController@index');

//Articulos
Route::get('/{$categoria}/{$id_post}','IndexController@verArticulo');


// Sección de artículos

Route::get('/admin/verArticulos','AdminArticulosController@index');
Route::get('/admin/crearArticulos','AdminArticulosController@create');
Route::post('/admin/crearArticulos','AdminArticulosController@store')->name('agregarArticulo');
Route::get('/admin/editarArticulos/{id}','AdminArticulosController@edit')->name('editarArticulo');
Route::get('/admin/eliminarArticulos/{id}','AdminArticulosController@delete')->name('eliminarArticulo');

//Sección de consultas

Route::get('/admin/verConsultas','AdminConsultasController@index');
Route::get('/admin/crearConsultas','AdminConsultasController@create');
Route::get('/admin/editarConsultas/{id}','AdminConsultasController@edit');
Route::get('/admin/eliminarConsultas/{id}','AdminConsultasController@delete');

//Sección de categorías

Route::get('/admin/verCategorias','AdminCategoriasController@index');
Route::get('/admin/crearCategorias','AdminCategoriasController@create');
Route::post('/admin/crearCategorias','AdminCategoriasController@store')->name('agregarCategoria');
Route::get('/admin/editarCategorias/{id}','AdminCategoriasController@edit')->name('editarCategoria');
Route::post('/admin/actualizarCategorias/{id}','AdminCategoriasController@update')->name('actualizarCategoria');
Route::post('/admin/eliminarCategorias/','AdminCategoriasController@destroy')->name('eliminarCategoria');

//Sección de rubros

Route::get('/admin/verRubros','AdminRubrosController@index');
Route::get('/admin/crearRubros','AdminRubrosController@create');
Route::get('/admin/editarRubros/{id}','AdminRubrosController@edit');
Route::get('/admin/eliminarRubros/{id}','AdminRubrosController@delete');

//Sección de usuarios

Route::get('/admin/verUsuarios','AdminUsuariosController@index');
Route::get('/admin/crearUsuarios','AdminUsuariosController@create');
Route::get('/admin/editarUsuarios/{id}','AdminUsuariosController@edit');
Route::get('/admin/eliminarUsuarios/{id}','AdminUsuariosController@delete');

//Sección de apariencia

Route::get('/admin/verApariencia','AdminAparienciaController@index');
Route::get('/admin/editarApariencia/{id}','AdminAparienciaController@edit');

//Sección de apariencia

Route::get('/admin/verPublicidad','AdminPublicidadController@index');
Route::get('/admin/editarPublicidad/{id}','AdminPublicidadController@edit');