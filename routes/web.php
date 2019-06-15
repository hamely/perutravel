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
Route::resource('ubigeos', 'UbigeoController');

Route::resource('multimedia', 'multimediaController');
Route::resource('imagen','ImageController');
Route::get('image/listar/{id?}', [ 'uses' => 'ImageController@listarImagenes' ])->name('listarImagenes');
Route::get('image/delete/{id?}',[ 'uses' => 'ImageController@delete_img' ])->name('EliminarImagenes');


Route::resource('languages', 'languagesController');

Route::resource('paises', 'paisesController');



Route::resource('testimonios', 'TestimonioController');

Route::resource('tipoCategoriaTours', 'TipoCategoriaTourController');

Route::resource('tours', 'toursController');

Route::resource('itinerarios', 'itinerariosController');

Route::get('tourItinerario/{id?}','itinerariosController@tourItinerarioShow')->name('tourItinerario');

Route::get('tourItinerarioCreate/{id?}','itinerariosController@tourItinerarioCreate')->name('tourItinerarioCreate');

Route::resource('userControllers', 'userControllerController');

Route::resource('categoriaBlogs', 'CategoriaBlogController');

Route::resource('blogs', 'BlogController');

Route::get('/blog','PublicController@blog');
Route:: get('/listar_blog', 
[
	'uses' => 'PublicController@blog',
	'as' => 'listar_blog'
]);

Route:: get('/listar_categoria_blog/{categoria?}', 
[
	'uses' => 'PublicController@blogPorCategoria',
	'as' => 'listar_categoria_blog'
]);
// Route::get('/blogPorCategoria','PublicController@blogPorCategoria');

Route::get('/blogPorCategoria/{categoria?}',['uses'=>'PublicController@blogPorCategoria'])->name('blogPorCategoria');
// Route::get('/detalleBlog','PublicController@detalleBlog');
Route::get('/detalle/{slug?}',['uses'=>'PublicController@detalleBlog'])->name('detalleBlog');

Route::post('/images-delete', 'BlogController@destroyImagen');
Route::get('/images-show', 'BlogController@indexImagen');

Route:: POST('/images-save', 
[
	'uses' => 'BlogController@storeImagen',
	'as' => 'blog.save'
]);

Route:: POST('/saveContenidoBlog', 
[
	'uses' => 'BlogController@saveContenidoBlog',
	'as' => 'blog.contenido'
]);

Route:: POST('/saveCambioImagenBlog', 
[
	'uses' => 'BlogController@saveCambioImagenBlog',
	'as' => 'blog.cambioImagen'
]);

