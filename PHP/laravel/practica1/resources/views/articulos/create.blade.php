@extends('layouts.master')

@section('titulo', 'Revistapp')

@section('contenido')
<form method="post" action="{{ route('articulos.store') }}">
        @csrf
        <input name="titulo" id="titulo" type="text">
        <input name="contenido" id="contenido" type="text">
        <input value="Crear" type="submit">
    </form>
@endsection