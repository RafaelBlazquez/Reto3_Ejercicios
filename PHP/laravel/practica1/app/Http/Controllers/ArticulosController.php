<?php

namespace App\Http\Controllers;
   
use App\Models\Articulo;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Array_;
use Redirect;

class ArticulosController extends Controller
{
    public function index()
    {   
        $articulos= Articulo::all();

    // Recoger solo el nombre de los articulos.
    
        $nombres= [];
        foreach ($articulos as $articulo){
            $nombre =$articulo->titulo;
            array_push($nombres,$nombre);
        }
       
        return view('index',[
            "nombres" => $nombres
        ]); 
    }

    public function show($titulo)
    {   
        $articulo= Articulo::where('titulo',$titulo)->first();

        return view('show',[
            "articulo" => $articulo
        ]); 
    }

    public function create()
    {   
        return view('create',[]); 
    }

    public function store(Request $request)
    {   
        $articulo= new Articulo;

    // Dos opciones del request
        
        $articulo->titulo = $request->titulo;   
        $articulo-> contenido = $request->get('contenido');
        $articulo->save();
       
        return redirect( route('articulos.index') ); 
    }

}
