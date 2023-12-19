@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <div>
        <div class="card-header"><h3>Vendedores</h3></div>
    </div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
@stop

@section('content')
    @if (Auth::user()->cargo_id ==2)
    <section class="container">
        <div class="header">
            <br>
            <table id="myTable"  class="table table-light dt-responsive nowrap text-center" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Correo electrónico</th>
                        <th>Cargo</th>
                        <th style="text-align: center">I/H</th>
                        <th  style="text-align: center">Editar</th>
                        <th  style="text-align: center">Detalles</th>
                    </tr>
                </thead>
           
                <tbody>
                    @foreach ($vendedores as $v)
                            @if ($v->estado=="ACTIVO")
                            <tr>  
                            <td>{{$v->id}}</td>
                            <td>{{$v->name}}</td>
                            <td class="col-2">{{$v->apellidos}}</td>
                            <td>{{$v->telefono}}</td>
                            <td>{{$v->email}}</td>
                            <td>{{$v->descripcioncargo}}</td> 
                            <td style="text-align: center">
                                <form action="{{route('inhabilitar',$v->id)}}" method="get">                             
                                    <button type="submit" style="background: none" class="btn img">
                                        @if ($v->estado =="ACTIVO")
                                        <img src="https://image.flaticon.com/icons/png/512/2150/2150538.png" alt="icono borrar" style="width: 30px; height: 30px;">
                                        @else
                                        <img src="https://image.flaticon.com/icons/png/512/2150/2150374.png" alt="icono borrar" style="width: 30px; height: 30px;">
                                        @endif
                                    </button>
                                </form>
                            </td>

                            <td style="text-align: center">
                                <form action="{{route('vendedor.edit',$v->id)}}" method="get">
                                    <button type="submit"  class="btn img"> <img src="https://image.flaticon.com/icons/png/512/1632/1632587.png" alt="icono borrar" style="width: 25px; height: 25px;"></button>
                                </form>        
                            </td>

                            <td style="text-align: center">
                                <form action="{{route('vendedor.show',$v->id)}}" method="get">
                                    <button type="submit" class="btn img"> <img src="https://image.flaticon.com/icons/png/512/1632/1632612.png" alt="icono borrar" style="width: 25px; height: 25px;"></button>
                                </form>          
                            </td>
       
                        </tr>                            
                        @endif
                    @endforeach
                </tbody>
               </table>
               <br>
        </div>
    </section>
    <div class="card-header">
        
        <form action="{{Route('vendedor.create')}}" method="get">
            <button type="submit" class="btn btn-success">Registrar nuevo</button>
        </form>
    </div>   
    @else
        Usted no es administrador
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    <script>
     console.log('Hi!');

     $(document).ready( function () {
            $('#myTable').DataTable();
        } );
      </script>
      
      <script>
        $('#myTable').DataTable({
        responsive: true,
        autoWidth: false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontro lo que busca",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate": {
                "next": "Siguiente",
                "previous": "Anterior"
            }

        }
    });
    </script>
@stop