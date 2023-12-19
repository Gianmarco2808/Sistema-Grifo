@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div>
        <div class="card-header"><h3>Cargos</h3></div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <!-- JQuery Primero -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Toastr.js Después -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@stop

@section('content')
@if (Auth::user()->id ==1)
    <section class="container">
        <div class="header">
            <br>
            <table id="myTable"  class="table table-light dt-responsive nowrap text-center" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Sueldo</th>
                        <th style="text-align: center">editar</th>
                        <th style="text-align: center">Eliminar</th>
                      </tr>
                </thead>
           
                <tbody>
                    @foreach ($cargos as $c)
                    
                        <tr>  
                            <td>{{$c->id}}</td>
                            <td>{{$c->descripcioncargo}}</td>
                            <td>{{$c->sueldo}}</td>

                            <td style="text-align: center">
                                <form action="{{route('Cargo.edit',$c->id)}}" method="get">
                                    @csrf
                                    <button type="submit" style="background: none" class="btn img"> <img src="https://image.flaticon.com/icons/png/512/1632/1632587.png" alt="icono borrar" style="width: 25px; height: 25px;"></button>
                                </form>        
                            </td>

                            <td style="text-align: center">
                                <form action="{{route('Cargo.destroy',$c->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" style="background: none" class="btn img"> <img src="https://cdn-icons-png.flaticon.com/512/1632/1632602.png" alt="icono borrar" style="width: 25px; height: 25px;"></button>
                                </form>        
                            </td>
                        </tr>
                    @endforeach
                </tbody>
               </table>
               <br>
        </div>
    </section>

    <div class="card-header">
        
        <form action="{{Route('Cargo.create')}}" method="get">
            <button type="submit" class="btn btn-danger">Registrar nuevo Cargo</button>
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