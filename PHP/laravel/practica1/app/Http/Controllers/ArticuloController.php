<?php

namespace App\Http\Controllers;
   
use App\Models\Articulo;
use App\Models\Comentario;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Array_;
use Redirect;
use SebastianBergmann\Environment\Console;

class ArticuloController extends Controller
{
    public function index()
    {   
        $articulos= Articulo::all();
       
        return view('articulos.index',[
            "articulos" => $articulos,
        ]); 
    }

    public function show($id)
    {   
        $articulo= Articulo::where('id',$id)->first();
        $id = $articulo->id;
        $comentarios= Comentario::where('articulo_id',$id)->get();
        return view('articulos.show',[
            "articulo" => $articulo,
            "comentarios" => $comentarios
        ]); 
    }

    public function create()
    {   
        return view('articulos.create'); 
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
    public function delete($id)
    {   
        $articulo = Articulo::destroy($id);
        return redirect( route('articulos.index') ); 
    }

}