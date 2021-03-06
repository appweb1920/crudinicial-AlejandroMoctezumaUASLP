<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@muestraRecolector');

// Recolector
Route::get('/muestraRecolector','HomeController@muestraRecolector');
Route::get('/creaRecolector','HomeController@creaRecolector');
Route::post('/creaRecolector/guardaRecolector','HomeController@guardaRecolector');
Route::get('/eliminaRecolector/{id}','HomeController@eliminaRecolector');
Route::get('/editaRecolector/{id}','HomeController@editaRecolector');
Route::post('/editarRecolector/guardaEdicion','HomeController@guardaEdicionRecolector');

// Recoleccion
Route::get('/muestraRecoleccion','HomeController@muestraRecoleccion');
Route::get('/creaRecoleccion','HomeController@creaRecoleccion');
Route::post('/creaRecoleccion/guardaRecoleccion','HomeController@guardaRecoleccion');
Route::get('/eliminaRecoleccion/{id}','HomeController@eliminaRecoleccion');
Route::get('/editaRecoleccion/{id}','HomeController@editaRecoleccion');
Route::post('/editarRecoleccion/guardaEdicion','HomeController@guardaEdicionRecoleccion');

// Enlaza Recolector con Recolleccion
Route::get('/muestraEnlaces','HomeController@muestraEnlaces01');
Route::get('/enlazarRecolectorRecoleccion/{id_recolector}/{id_recoleccion}','HomeController@enlace01');

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
