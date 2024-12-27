<?php

use Illuminate\Support\Facades\Route;
use App\Models\Producto;


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
//parametro 1, nombre del directorio donde están las vistas. 
//parametro 2, nombre del controller

Route::get('/productos/product',function () {
    return view('/productos/product');
});
Route::get('/productos/buscar',[App\Http\Controllers\ProductosController::class,'getIndex'])->name('buscar');
Route::get('/', function () {
    return view('welcome');
});

Route::Resource('/productos','App\Http\Controllers\ProductosController');
// hay que ingresar el path adsoluto
/*
Route::get('inicio','App\Http\Controllers\ProductosController@index');
Route::get('crear','App\Http\Controllers\ProductosController@create');
Route::get('actualizar','App\Http\Controllers\ProductosController@update');
Route::get('insetar','App\Http\Controllers\ProductosController@store');
Route::get('eliminar','App\Http\Controllers\ProductosController@destroy');
*/