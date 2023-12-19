@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div>
        <div class="card-header"><h3>Vendedor</h3></div>
    </div>
    <style>
        #div1{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
@stop

@section('content')
<div class="row col-12">

    <div class="row" style="margin-left: 7%;">
        <div id="div1" class="col-6">
            <div>Nombres: </div>
            <div>Apellidos:</div>
            <div>DNI: </div>
            <div>Teléfono:</div>
        </div>

        <div class="col-6">
            <div>{{$vendedor->name}}</div>
            <div>{{$vendedor->apellidos}}</div>
            <div>{{$vendedor->dni}}</div>
            <div>{{$vendedor->telefono}}</div>
        </div>
    </div>



    <div class="row" style="margin-left: 7%;">
        <div id="div1" class="col-6">
            <div>Direccion: </div>
            <div>Genero:</div>
            <div>Nacimiento: </div>
            <div>Email:</div>
        </div>

        <div class="col-6">
            <div>{{$vendedor->direccion}}</div>
            <div>{{$vendedor->genero}}</div>
            <div>{{$vendedor->fechanacimiento}}</div>
            <div>{{$vendedor->email}}</div>
        </div>
    </div>

    <div class="row" style="align-items: center;margin-left: 10%; text-align: center">
        @if ($vendedor->estado == "ACTIVO")
        <h3>Estado: ACTIVO </h3>    
        @else
        <h3>Estado: INACTIVO </h3>    
        @endif
    </div>
</div>



    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop