@extends('layouts/layout')
@section('content')
    @include('sub-vista')   
    <table>
        <tr>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Tipo</td>
            <td>Precio</td>    
        </tr>
       @foreach($zapatillas as $zapatilla)
        <tr>
            <td>{{$zapatilla->getMarca()}}</td>
            <td>{{$zapatilla->getModelo()}}</td>
            <td>{{$zapatilla->getTipo()}}</td>
            <td>{{$zapatilla->getPrecio()}}</td>
        </tr>
        @endforeach
        
      
    </table>
@endsection

