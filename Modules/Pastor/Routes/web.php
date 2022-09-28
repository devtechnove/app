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

Route::middleware('auth','actived')->group(function() {
    Route::resource('/pastor', 'PastorController');
    Route::post('/pastor/buscar', 'PastorController@buscar')->name('pastor.buscar');
    Route::get('/registro/pastor', 'PastorController@ingreso')->name('pastor.ingreso');
    Route::post('/registro/pastor', 'PastorController@guardar')->name('pastor.guardar');

    Route::get('/actividad/{pastor}/asistencia', 'ActividadController@asistencia')->name('actividad.asistencia');
    Route::post('/actividad/asistencia', 'ActividadController@registro')->name('registro.asistencia');
    Route::get('/asistencia/actividad', 'ActividadController@index')->name('historico.asistencia');
});
