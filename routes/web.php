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
use App\Amenaza;
use App\Noticia;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/activos', 'ActivosController@index')->name('activos');
Route::get('/activo_amenaza/{id}/{nombre}', 'ActivosController@getAmenazas')->name('activos');

Route::get('/noticias', 'NoticiasController@index')->name('noticias');

Route::get('/procesos', 'ProcesosController@index')->name('procesos');

Route::get('/amenazas', 'AmenazasController@index')->name('amenazas');

Route::get('/politica_general', 'PoliticaController@index')->name('politica');

Route::get('/politica_especifica', 'PoliticaController@especifica')->name('politica');

Route::get('/politica_aplicacion', 'PoliticaController@aplicacion')->name('politica');

Route::get('/activos_switch', 'ActivosController@activos_switch')->name('acivos');

Route::get('/control_asociado', 'PoliticaController@control')->name('acivos');

//Route::get('/activo_amenaza', 'AmenazasController@activoAmenaza')->name('amenazas');





