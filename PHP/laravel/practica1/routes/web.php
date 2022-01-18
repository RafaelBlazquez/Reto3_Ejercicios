<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ComentarioController;
use App\Models\Articulo;
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


Route::get('/', [ArticuloController::class, 'index'])->name('articulos.index');

Route::get('articulos/', [ArticuloController::class, 'index'])->name('articulos.index');

Route::get('articulos/create', [ArticuloController::class, 'create'])->name('articulos.create');

Route::get('articulos/{id}/comentarios/create', [ComentarioController::class, 'create'])->name('comentarios.create');

Route::post('articulos/', [ArticuloController::class, 'store'])->name('articulos.store');

Route::post('articulos/{id}', [ComentarioController::class, 'store'])->name('comentarios.store');

Route::get('articulos/{id}', [ArticuloController::class, 'show'])->name('articulos.show');

Route::delete('articulos/delete/{titulo}', [ArticuloController::class, 'delete'])->name('articulos.delete');

