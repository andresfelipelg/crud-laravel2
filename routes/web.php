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
use App\Http\Controllers\ProductosController;

Route::resource('producto', 'ProductosController');

Route::get('/', function () {
    return view('welcome');
});


/*
Route::get('/inicio', 'ProductoController@index');
Route::get('/crear', 'ProductoController@create');
Route::get('/actualizar','ProductoController@update');
Route::get('/insertar','ProductoController@store');
Route::get('/borrar','ProductoController@destroy');
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
