<?php

use App\Http\Controllers\ArticulosController;
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

Route::get('/', [ArticulosController::class, 'index'])->name('articulos.index');

Route::get('/create', [ArticulosController::class, 'create'])->name('articulos.create');

Route::post('/', [ArticulosController::class, 'store'])->name('articulos.store');

Route::get('/{titulo}', [ArticulosController::class, 'show'])->name('articulos.show');

Route::get('/remove/{titulo}', [ArticulosController::class, 'delete'])->name('articulos.delete');

