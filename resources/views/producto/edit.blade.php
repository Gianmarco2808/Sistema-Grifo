@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div>
        <div class="card-header"><h3>Producto</h3></div>
    </div>
@stop

@section('content')
    <div class="card-header">Editar datos del producto</div>
    <form action="{{route('producto.update',$producto->id)}}" method="post">
        @csrf
        {{method_field('PUT')}}

        <div class="card-body">
            <div class="form-group">
                <label for="name">Categoria</label>
                <select class="form-control" name="categoria" id="">
                    @foreach ($categorias as $item)
                    <option value="{{$item->id}}"
                       @if ($producto->categoria_id===$item->id)
                           selected
                       @endif
                        >
                        {{$item->descripcion}}
                    </option>
                    @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="name">Descripcion</label>
                <input required type="text" value="{{$producto->descripcion}}" class="form-control" id="exampleInputEmail1" placeholder="Ingresar descripción" name="txtdescripcion">
            </div>

            <div class="form-group">
                <label for="name">Cantidad</label>
                <input required type="text" value="{{$producto->cantidad}}" class="form-control" id="exampleInputEmail1" placeholder="Ingresar cantidad" name="txtcantidad">
            </div>

            <div class="form-group">
                <label for="name">Precio</label>
                <input required type="text" value="{{$producto->precio}}" class="form-control" id="exampleInputEmail1" placeholder="Ingresar precio" name="txtprecio">
            </div>
            
            <div class="form-group">
                <label for="name">Proveedor</label>
                <select class="form-control" name="proveedor" id="">
                    @foreach ($proveedores as $proveedor)
                    <option value="{{$proveedor->id}}" 
                        @if ($proveedor->id == $producto->proveedor_id)
                            selected
                        @endif
                        >{{$proveedor->nombre}}</option>
                    @endforeach
                </select>
            </div>              
            <div class="card-footer">
                <button type="submit" style="float: right" class="btn btn-primary">Guardar</button>
                <a type="button" class="btn btn-danger" href="{{ route('producto.index') }}">Atrás</a>
            </div>
    </form>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop