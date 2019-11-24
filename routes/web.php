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

Route::get('/noticias', 'NoticiasController@index')->name('noticias');

Route::get('/procesos', 'ProcesosController@index')->name('activos');

Route::get('/amenazas', 'AmenazasController@index')->name('amenazas');

Route::get('pruebasAmenazas', function(){
	$pasteles = Amenaza::where('nivel','3')->get();
    dd($pasteles);
});	




