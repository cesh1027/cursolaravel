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

Route::get('/', function () {
    return view('welcome');
});

//ruta para ver un mensaje
Route::get ('/mi_primer_ruta', function(){
    return 'Hola Mundo';
});


//rutas con parametros
Route::get ('/name/{name}/lastname/{lastname?}',function($name, $lastname='apellido'){
    return 'hola soy '.$name . $lastname;
});

Route::get ('/prueba', 'pruebaController@prueba');