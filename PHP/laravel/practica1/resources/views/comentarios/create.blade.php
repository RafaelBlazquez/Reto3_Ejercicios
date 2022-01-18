@extends('layouts.master')

@section('titulo', 'Revistapp')

@section('contenido')
<form method="post" action="{{ route('comentarios.store', $id )}}">
        @csrf
        <input name="comment" id="comment" type="text">
        <input value="Crear" type="submit">
    </form>
@endsection