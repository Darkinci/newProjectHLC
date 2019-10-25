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

Route::get('/', 'LibrosController@index');

Route::get('libros/{id}', 'LibrosController@show');

Route::get('plantilla','LibrosController@show');

/*Route::get('libros/{id_libro}', function ($id_libro) {
    //en cuanto nos ponga una cadena (del tipo que sea), mostrara por pantalla "este es el libro 'abeja' " por ejemplo
    return "Este es el libro {$id_libro}";
});*/
