@extends('layouts.master')

@section('titulo', 'Revistapp')

@section('contenido')

    @foreach ($articulos as $articulo)
        <ul>
            <li>
                <a href="{{ route('articulos.show', $articulo->id) }}">{{$articulo->titulo}}</a>
            </li>
        </ul>
    @endforeach
@endsection

@section('anadir')

    <a href="{{ route('articulos.create') }}">Añadir producto</a>

@endsection

 