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

Route::get('/', function () {
    //return view('welcome');
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


	/* Rutas de Practicas */
/* =================================== */

// ruta 1 de practica, escribiendo la "ruta1" directo en la URL.
Route::get('/ruta1', function () {
	return "SI LLEGA FINO!!";
});

// ruta 2 de practica, escribiendo la "ruta2" directo en la URL, Seguido del (os) parametro (s).
Route::get('/ruta2/{nombre}/ruta2.1/{apellido?}', function($nombre, $apellido=null){
	return "Bienvenido al Sistema ". $nombre .' '.$apellido;
});

// ruta 3 de practica, haciendo llamado de controladores.
Route::get('ruta3','ControladorDePrueba@prueba');

// Imagenes de Practica, Haciendo Uso del Controlador tipo "resource" asi tmb la ruta de tipo "resource"

Route::resource('imagenes','TestDeImagenController');

// Ruta para la Integracion de AdminLTE en Laravel.
Route::get('/admin', function() {
    // retorna la vista de AdminLTE -> Inicio.
    return view('admin.inicio');
});

/* =================================== */
	/* Fin Rutas de Practica */


Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

