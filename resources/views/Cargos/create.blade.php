@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div>
        <div class="card-header"><h3>Cargos</h3></div>
    </div>
@stop

@section('content')
    <div class="card-header">Registrar nuevo Cargo</div>
    <form action="{{route('Cargo.store')}}" method="post">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label for="name">Descripcion</label>
                <input required type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresar descripción" name="txtdescripcion">
            </div>

            <div class="form-group">
                <label for="name">Sueldo</label>
                <input required type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresar stock" name="txtsueldo">
            </div>
       
            <div class="card-footer">
                <a type="button" class="btn btn-danger" href="{{ route('Cargo.index') }}">Atrás</a>
                <button type="submit" style="float: right" class="btn btn-primary">Guardar</button>
            </div>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop