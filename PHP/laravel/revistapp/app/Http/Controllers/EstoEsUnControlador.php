<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstoEsUnControlador extends Controller
{
    public function show()
    {
        return view('articulos.index',[
            "titulo" => "reto 3"
        ])->with('mensaje','todo OK');;
    }
}
