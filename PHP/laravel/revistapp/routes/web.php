<?php

use App\Http\Controllers\EstoEsUnControlador;
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
Route::get('/hola', function () {
    return "Hola!";
});

Route::get('/vista', [EstoEsUnControlador::class, 'show']);

Route::get('/array', function () {
    $ordenes = ["Uno","Dos","Tres"];
    $articulos = ["Primero","Segundo","Tercero","Cuarto"];
    return view('articulos.array',[
        "titulo" => "reto 3"
        //"articulos"=> $articulos,
        //"ordenes"=> $ordenes,
    ])
    ->with('articulos',$articulos)
    ->with('ordenes',$ordenes);
});