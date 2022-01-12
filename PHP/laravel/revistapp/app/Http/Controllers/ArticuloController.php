<?php
   
namespace App\Http\Controllers;
   
use App\Models\Articulo;
use Illuminate\Http\Request;
use Redirect;
   
class ArticuloController extends Controller
{

    /**
     * Create a new articulo instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validar la petición...

        $articulo = new Articulo;

        $articulo->titulo = request('titulo');

        $articulo->save();
    }
   
    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {         
        $articulo = Articulo::find(1);

        $articulo->titulo = request('titulo');
        $articulo->contenido = request('contenido');

        $articulo->save();
    }
   
    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        // Encuentra el artículo por ID y lo elimina
        $articulo = Articulo::find($id);
        $articulo->delete();
        
        // Alternativa
        Articulo::destroy($id);
        
        //Borrar modelos por consulta (borra todos los que encuentre en la consulta)
        Articulo::where('id',$id)->delete();        
    }
     
}