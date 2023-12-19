@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div>
        <div class="card-header"><h3>Cargos</h3></div>
    </div>
@stop

@section('content')
    <div class="card-header">Editar datos del Cargo</div>
    <form action="{{route('Cargo.update',$cargos->id)}}" method="post">
        @csrf
        {{method_field('PUT')}}

        <div class="card-body">
              <div class="form-group">
                <label for="name">Descripcion</label>
                <input required type="text" value="{{$cargos->descripcioncargo}}" class="form-control" id="descripcion" placeholder="Ingresar descripción" name="descripcion">
            </div>

            <div class="form-group">
                <label for="name">Sueldo</label>
                <input required type="text" value="{{$cargos->sueldo}}" class="form-control" id="sueldo" placeholder="Ingresar cantidad" name="sueldo">
            </div>
                         
            <div class="card-footer">
                <button type="submit" style="float: right" class="btn btn-primary">Guardar</button>
                <a type="button" class="btn btn-danger" href="{{ route('Cargo.index') }}">Atrás</a>
            </div>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop