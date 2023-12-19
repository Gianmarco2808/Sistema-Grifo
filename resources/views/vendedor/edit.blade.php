@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div>
        <div class="card-header"><h3>Vendedor</h3></div>
    </div>
@stop

@section('content')
    <div class="card-header">Editar datos de vendedor</div>

    <div class="container-fluid col-11 rounded" style="background-color: rgb(255, 255, 255)">
        <form action="{{route('vendedor.update',$vendedor->id)}}" method="post">
            @csrf
            {{method_field('PUT')}}
            <div class="card-body">
                <div class="row">
                    <div class="col form-group">
                        <label for="name">Nombres</label>
                        <input value="{{$vendedor->name}}" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresar nombres" name="txtnombres">
                      </div>
          
                      <div class="col form-group">
                          <label for="name">Apellidos</label>
                          <input value="{{$vendedor->apellidos}}" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresar apellidos" name="txtapellidos">
                      </div>
                </div>
               
                <div class="row">
                    <div class="col-3 form-group">
                        <label for="name">Teléfono</label>
                        <input required value="{{$vendedor->telefono}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresar teléfono" name="txttelefono">
                    </div>
        
                    <div class="col-3 form-group">
                        <label for="exampleInputEmail1">DNI</label>
                        <input required value="{{$vendedor->dni}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese email" name="txtdni">
                    </div>
    
                    <div class="col-3 form-group" >
                        <div class="col">
                            <div class="row">
                                <label for="exampleInputEmail1">Género</label>
                            </div>
                            <div class="row">
    
                                    <div class="col-2">
                                        <input required @if ($vendedor->genero =="M") checked  @endif type="radio" id="contactChoice1" name="txtgenero" value="M">
                                    </div>
    
                                    <div class="col">
                                        <label for="contactChoice1">M</label>
                                    </div>
    
                                    <div class="col-2">
                                        <input required @if ($vendedor->genero =="F") checked  @endif type="radio" id="contactChoice2" name="txtgenero" value="F">
                                    </div>
    
                                    <div class="col">
                                        <label for="contactChoice2">F</label>
                                    </div>
                            </div>         
                        </div>
                    </div>    
    
                    <div class="col-3 form-group">
                        <label for="exampleInputEmail1">Fecha de nacimiento</label>
                        <input value="{{$vendedor->fechanacimiento}}" required type="date" class="form-control" id="exampleInputEmail1" placeholder="Ingrese email" name="txtfechanacimiento">
                    </div>
                </div>

                <div class="row">
                    <div class="col form-group">
                        <label for="exampleInputEmail1">Dirección</label>
                        <input value="{{$vendedor->direccion}}" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese email" name="txtdireccion">
                    </div> 
                    <div class="col form-group">
                        <label for="exampleInputEmail1">Correo electrónico</label>
                        <input value="{{$vendedor->email}}" required type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese email" name="txtcorreo">
                    </div>
                </div>
               
                <div class="col form-group">
                    <label for="exampleInputEmail1">Cargo</label>
                    <select class="form-control" name="cargo" id="cargo">
                        @foreach ($cargos as $item)
                            <option 
                            @if ($item->id=$vendedor->cargo_id)
                                selected
                            @endif 
                            value="{{$item->id}}">{{$item->descripcioncargo}}
                        </option>
                        @endforeach
                    </select>
                </div>
    
                <div>
                    <a type="button" class="btn btn-danger" href="{{ route('vendedor.index') }}">Atrás</a>
                    <button type="submit" style="float: right" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop