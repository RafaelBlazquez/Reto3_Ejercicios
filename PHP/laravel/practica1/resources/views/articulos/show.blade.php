@extends('layouts.master')

@section('titulo', 'Revistapp')

@section('contenido')
    <p>Titulo: {{$articulo->titulo}}</p>

    @foreach ($comentarios as $comentario)
        {{$comentario->comment}}
        <br>
    
    @endforeach
    <br>
    
@endsection

@section('anadir')

    <a href="{{ route('comentarios.create',$articulo->id) }}">Añadir comentario</a>

@endsection

@section('volver')

<form action="{{ route('articulos.delete',$articulo->id )}}" method="POST">
        @csrf
        @method("delete")
        <input value="Borrar" type="submit">
    </form>
    
    <a href="{{ route('articulos.index') }}">Atrás</a>

@endsection