<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($nombres as $nombre)
        <ul>
            <li>
                <a href="{{ route('articulos.show', $nombre) }}">{{$nombre}}</a>
            </li>
        </ul>
    @endforeach

    <br>
    <br>
    <br>
    <a href="{{ route('articulos.store') }}">Añadir producto</a>
</body>
</html>