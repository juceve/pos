<?php

use App\Http\Controllers\CategoriaproductoController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\ProdloteController;
use App\Http\Controllers\ProductoController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('categoriaproductos',CategoriaproductoController::class)->names('categoriaproductos');
Route::resource('movimientos',MovimientoController::class)->names('movimientos');
Route::resource('productos',ProductoController::class)->names('productos');
Route::resource('lotes',ProdloteController::class)->names('prodlotes');
Route::get('/dataproductos', [ProductoController::class, 'data'])->name('dataproductos');
