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

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('productos','FrontController@productos');
Route::get('nosotros','FrontController@nosotros');
Route::get('admin','FrontController@admin');
Route::get('asistencia','FrontController@asistencia');
Route::get('preguntas','FrontController@preguntas');
Route::get('manuales','FrontController@manuales');
Route::get('login','FrontController@login');


Route::get('usucreate','UsuarioController@create');
Route::get('listausu','FrontController@listarUsu');
Route::get('usuedit','FrontController@usuedit');


Route::get('reclamoCreate','ReclamosController@create');
Route::get('listareclamos','FrontController@listareclamos');
Route::get('reclamoedit','FrontController@reclamoedit');
Route::get('reclamover','FrontController@reclamover');
Route::get('listaasistencias','FrontController@listaasistencias');
Route::get('asistenciaver','FrontController@asistenciaver');
Route::get('atencionasistencia','AsistenciaController@create');

Route::get('inforeclamospend','FrontController@inforeclamospend');
Route::get('infoproductosmasrec','FrontController@infoproductosmasrec');
Route::get('inforeclamostipofalla','FrontController@inforeclamostipofalla');
Route::get('inforeclamossolucion','FrontController@inforeclamossolucion');

Route::get('adminG','FrontController@adminG');
Route::get('adminT','FrontController@adminT');
Route::get('adminSGP','FrontController@adminSGP');

// tecnico
Route::get('reclamos/listareclamos','FrontController@Tlistareclamos');
Route::get('reclamos/reclamoedit','FrontController@Treclamoedit');
Route::get('reclamos/reclamover','FrontController@Treclamover');




// Route::resource('principal','PrincipalController');
// // Route::get('nombre/{nombre}','PrincipalController@nombre');
// Route::get('/', function () {
//     return view('welcome');
// });
