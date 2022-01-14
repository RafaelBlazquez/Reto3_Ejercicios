<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{$articulo}}
    <br>
    <form action="{{ route('articulos.delete',$articulo->id )}}" method="POST">
        @csrf
        @method("delete")
        <input value="Borrar" type="submit">
    </form>
    <a href="{{ route('articulos.index') }}">Atrás</a>

    
</body>
</html>