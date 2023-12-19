@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div>
        <div class="card-header"><h3>Registrar vendedor</h3></div>
    </div>
@stop

@section('content')
    

    <div class="container-fluid col-11 rounded" style="background-color: rgb(255, 255, 255)">
        <form action="{{route('vendedor.store')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col form-group">
                        <label for="name">Nombres</label>
                        <input required type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresar nombres" name="txtnombres">
                      </div>
          
                      <div class="col form-group">
                          <label for="name">Apellidos</label>
                          <input required type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresar apellidos" name="txtapellidos">
                      </div>
                </div>
               
                <div class="row">
                    <div class="col-3 form-group">
                        <label for="name">Teléfono</label>
                        <input required type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresar teléfono" name="txttelefono">
                    </div>
        
                    <div class="col-3 form-group">
                        <label for="exampleInputEmail1">DNI</label>
                        <input required type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese email" name="txtdni">
                    </div>
    
                    <div class="col-3 form-group" >
                        <div class="col">
                            <div class="row">
                                <label for="exampleInputEmail1">Género</label>
                            </div>
                            <div class="row">
    
                                    <div class="col-2">
                                        <input required type="radio" id="contactChoice1" name="txtgenero" value="M">
                                    </div>
    
                                    <div class="col">                            <label for="contactChoice1">M</label>
                                    </div>
    
                                    <div class="col-2">
                                        <input required type="radio" id="contactChoice2" name="txtgenero" value="F">
                                    </div>
    
                                    <div class="col">
                                        <label for="contactChoice2">F</label>
                                    </div>
                            </div>         
                        </div>
                    </div>    
    
                    <div class="col-3 form-group">
                        <label for="exampleInputEmail1">Fecha de nacimiento</label>
                        <input required type="date" class="form-control" id="exampleInputEmail1" placeholder="Ingrese email" name="txtfechanacimiento">
                    </div>
                </div>

                <div class="row">
                    <div class="col form-group">
                        <label for="exampleInputEmail1">Dirección</label>
                        <input required type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese dirección" name="txtdireccion">
                    </div> 
                    <div class="col form-group">
                        <label for="exampleInputEmail1">Correo electrónico</label>
                        <input required type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese email" name="txtcorreo">
                    </div>
                    <div class="col form-group">
                        <label for="exampleInputEmail1">Cargo</label>
                        <select class="form-control" name="cargo" id="cargo">
                            @foreach ($cargos as $item)
                                <option value="{{$item->id}}">{{$item->descripcioncargo}}</option>
                            @endforeach
                        </select>
                    </div>
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