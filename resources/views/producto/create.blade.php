@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div>
        <div class="card-header"><h3>Producto</h3></div>
    </div>
@stop

@section('content')
    <div class="card-header">Registrar nuevo producto</div>
    <form action="{{route('producto.store')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
              <label for="name">Categoria</label>
              <select class="form-control" name="categoria" id="">
                  @foreach ($categorias as $item)
                  <option value="{{$item->id}}">{{$item->descripcion}}</option>
                  @endforeach
              </select>
            </div>

            <div class="form-group">
                <label for="name">Descripcion</label>
                <input required type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresar descripción" name="txtdescripcion">
            </div>

            <div class="form-group">
                <label for="name">Cantidad</label>
                <input required type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresar stock" name="txtstock">
            </div>

            <div class="form-group">
                <label for="name">Precio</label>
                <input required type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresar precio" name="txtprecio">
            </div>

            <div class="form-group">
                <label for="name">Proveedor</label>
                <select class="form-control" name="proveedor" id="">
                    @foreach ($proveedores as $proveedor)
                    <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                    @endforeach
                </select>
              </div>
            
            <div class="card-footer">
                <a type="button" class="btn btn-danger" href="{{ route('producto.index') }}">Atrás</a>
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