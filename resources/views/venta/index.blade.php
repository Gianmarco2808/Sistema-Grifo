@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
Registro de venta
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
@stop

@section('content')
    
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-secondary">
                Datos del cliente
            </div>

            <div class="row card-body">
                
                <div class="col-12"> 
                    <label class="form-group">Buscar</label>                    
                    <select class="selectpicker border-0 mb-1 px-2 py-2 rounded shadow" id="cliente_id" onchange="valoresCliente()">
                        <option value="" selected disabled>-- Selecciona Cliente --</option>
                        @foreach ($clientes as $c)
                            <option value="{{$c->id}}|{{$c->nroDocumento}}|{{$c->direccion}}|{{$c->telefono}}|{{$c->email}}|{{$C->tipoCliente}}">{{$c->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 bg-light" style="border-radius: 10px">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                            <label for="staticEmail" class="form-label">Dirección</label>
                                <input type="text" style="border: 1; background: transparent;" readonly class="form-control" id="direccion" value="">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                            <label for="staticEmail" class="form-label">Telefono</label>
                                <input type="text" style="border: 1; background: transparent;" readonly class="form-control" id="telefono" value="">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                            <label for="staticEmail" class="form-label">TipoDocumento</label>
                                <input type="text" style="border: 1; background: transparent;" readonly class="form-control" id="documento" value="NroDocumento">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="staticEmail" class="form-label">E-mail</label>
                                <input type="text" style="border: 1; background: transparent;" readonly class="form-control" id="email">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <div class="card2">
        <div class="row">
            <div class="col-md-8 cart">
                {{-- Productos --}}
                <div class="title"> 
                    <div class="row">
                        <div class="col">
                            <h4><b>Productos</b></h4>
                        </div>
                    </div>
                    <div class="row col align-items-center" >
                        <div class="row col-9  align-items-center">
                            <div class="col-8">
                                <select id="producto_id" class="selectpicker2 border-0 mb-1 px-2 py-2 rounded shadow">:V
                                    @foreach ($productos as $p)
                                        <option value="{{$p->id}}_{{$p->cantidad}}_{{$p->precio}}">{{$p->descripcion}}</option>
                                    @endforeach 
                                </select>
                            </div>
                            
                            <div class="col-4">
                                <input  type="text" disabled value="S/200" >
                            </div>
                        </div>
                        <div class="col-3 ml-4">
                            <button class="btn btn-success" type="button" style="border: solid; margin-top: auto; margin-bottom: auto">Añadir</button>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="https://www.maestro.com.pe/maestro/uploads/products/images/medium/252676X.jpg"></div>
                        <div class="col">
                            <div class="row text-muted">Aceite</div>
                            <div class="row">Blindax - Super</div>
                        </div>
                        <div class="row col">+<input class="col-3 form-control" type="text" style="border: 3; background: transparent; text-align: center;" class="border" value="1"> -</div>
                        <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                <hr>
                <div class="back-to-shop">
                    <a href="#">&leftarrow;</a>
                    <span class="text-muted">Regresar</span>
                </div>
            </div>
            <div class="col-md-4 summary">
                <div>
                    <h5><b>RESUMEN</b></h5>
                </div>
                <hr>
                <div class="row">
                    <p class="col">  Productos: 3</p> 
                    <div class="col text-right">&euro; 132.00</div>
                </div>
                <form>
                    <p>DELIVERY</p> 
                    <select>
                        <option class="text-muted">Estandar &euro;5.00</option>
                    </select> <br> <br>
                    <p>CODIGO DE DESCUENTO</p> 
                    <input id="code" placeholder="Ingresar tu código">
                </form>
                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">Total</div>
                    <div class="col text-right">&euro; 137.00</div>
                </div> <button class="btn btn-dark">VENDER</button>
            </div>
        </div>
    </div>
    <br>
@stop

@section('css')
<style>
    body {
        background: #ddd;
        min-height: 100vh;
        vertical-align: middle;
        font-family: sans-serif;
        font-size: 0.8rem;
        font-weight: bold
    }

    .title {
        margin-bottom: 5vh
    }

    .card2 {
        margin: auto;
        max-width: 950px;
        width: 90%;
        box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 1rem;
        border: transparent
    }

    @media(max-width:767px) {
        .card2 {
            margin: 3vh auto
        }
    }

    .cart {
        background-color: #fff;
        padding: 4vh 5vh;
        border-bottom-left-radius: 1rem;
        border-top-left-radius: 1rem
    }

    @media(max-width:767px) {
        .cart {
            padding: 4vh;
            border-bottom-left-radius: unset;
            border-top-right-radius: 1rem
        }
    }

    .summary {
        background-color: #ddd;
        border-top-right-radius: 1rem;
        border-bottom-right-radius: 1rem;
        padding: 4vh;
        color: rgb(65, 65, 65)
    }

    @media(max-width:767px) {
        .summary {
            border-top-right-radius: unset;
            border-bottom-left-radius: 1rem
        }
    }

    .summary .col-2 {
        padding: 0
    }

    .summary .col-10 {
        padding: 0
    }

    .row {
        margin: 0
    }

    .title b {
        font-size: 1.5rem
    }

    .main {
        margin: 0;
        padding: 2vh 0;
        width: 100%
    }

    .col-2,
    .col {
        padding: 0 1vh
    }

    a {
        padding: 0 1vh
    }

    .close {
        margin-left: auto;
        font-size: 0.7rem
    }

    img {
        width: 3.5rem
    }

    .back-to-shop {
        margin-top: 4.5rem
    }

    h5 {
        margin-top: 4vh
    }

    hr {
        margin-top: 1.25rem
    }

    form {
        padding: 2vh 0
    }

    select {
        border: 1px solid rgba(0, 0, 0, 0.137);
        padding: 1.5vh 1vh;
        margin-bottom: 4vh;
        outline: none;
        width: 100%;
        background-color: rgb(247, 247, 247)
    }

    input {
        border: 1px solid rgba(0, 0, 0, 0.137);
        padding: 1vh;
        margin-bottom: 4vh;
        outline: none;
        width: 100%;
        background-color: rgb(247, 247, 247)
    }

    input:focus::-webkit-input-placeholder {
        color: transparent
    }

    .btn {
        background-color: #000;
        border-color: #000;
        color: white;
        width: 100%;
        font-size: 0.7rem;
        margin-top: 4vh;
        padding: 1vh;
        border-radius: 0
    }

    .btn:focus {
        box-shadow: none;
        outline: none;
        box-shadow: none;
        color: white;
        -webkit-box-shadow: none;
        -webkit-user-select: none;
        transition: none
    }

    .btn:hover {
        color: white
    }

    a {
        color: black
    }

    a:hover {
        color: black;
        text-decoration: none
    }

    #code {
        background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253), rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
        background-repeat: no-repeat;
        background-position-x: 95%;
        background-position-y: center
    }

    .bg-light {
    background: #eef0f4;
    }

    .choices__list--dropdown .choices__item--selectable {
    padding-right: 1rem;
    }

    .choices__list--single {
    padding: 0;
    }


    .choices[data-type*=select-one]:after {
    right: 1.5rem;
    }

    .shadow {
    box-shadow: 0.3rem 0.3rem 1rem rgba(178, 200, 244, 0.23);
    }

    a {
    text-decoration: none;
    color: inherit;
    transition: all 0.3s;
    }
</style>
@stop

@section('js')
<script>
    const sorting = document.querySelector('.selectpicker');
    const commentSorting = document.querySelector('.selectpicker');
    const sortingchoices = new Choices(sorting, {
        placeholder: false,
        itemSelectText: ''
    });

    // Trick to apply your custom classes to generated dropdown menu
    let sortingClass = sorting.getAttribute('class');
    window.onload= function () {
        sorting.parentElement.setAttribute('class', sortingClass);
    }

    const sorting2 = document.querySelector('.selectpicker2');
    const commentSorting2 = document.querySelector('.selectpicker2');
    const sortingchoices2 = new Choices(sorting2, {
        placeholder: false,
        itemSelectText: ''
    });

    // Trick to apply your custom classes to generated dropdown menu
    let sortingClass2 = sorting2.getAttribute('class');
    window.onload= function () {
        sorting2.parentElement.setAttribute('class', sortingClass2);
    }


    function valoresCliente() {
        dataCliente = document.getElementById('cliente_id').value.split('|')
        document.getElementById('documento').value = dataCliente[1]
        document.getElementById('direccion').value = dataCliente[2]
        document.getElementById('telefono').value = dataCliente[3]        
        document.getElementById('email').value = dataCliente[4]

        tipoCliente = dataCliente[5]
        console.log(tipoCliente);
    }

    function añadirProducto(){
        dataProducto = document.querySelector('#producto_id').value.split('_')        
        
    }
</script>
@stop