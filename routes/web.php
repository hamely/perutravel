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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PublicController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('tipoAlojamientos', 'TipoAlojamientoController');

Route::resource('categoriaAlojamientos', 'CategoriaAlojamientoController');

Route::resource('tipoHabitacions', 'tipo_habitacionController');

Route::resource('alojamientos', 'alojamientoController');