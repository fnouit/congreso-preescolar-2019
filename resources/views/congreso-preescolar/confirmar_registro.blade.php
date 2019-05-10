@extends('layout.app')
@section('titulo','Registro Confirmado')
@section('container')

        <div class="container pt0 pb60">
            <div class="row mb50">
                <div class="col-md-10 ml-auto mr-auto">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">INFORMACIÓN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">AGREMIADO A LA SECCIÓN 56 DEL SNTE </th>
                                <td>{{$usuario->agremiado}}</td>
                            </tr>

                            <tr>
                                <th scope="row">USUARIO: </th>
                                <td>{{$usuario->nombre}} {{$usuario->apellido_p}} {{$usuario->apellido_m}}</td>
                            </tr>
                            <tr>
                                <th scope="row">RFC: </th>
                                <td>{{$usuario->rfc}}</td>
                            </tr>
                            <tr>
                                <th scope="row">TALLER AL QUE DESEAS ASISTIR: </th>
                                <td style="text-transform: uppercase;">TALLER {{$usuario->taller->id}} <br> {{$usuario->taller->titulo}}</td>
                            </tr>
                            <tr>
                                <th scope="row">CORREO ELECTRÓNICO: </th>
                                <td>{{$usuario->correo}}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <th scope="row">DELEGACION: </th>
                                <td>{{$usuario->delegacion}}</td>
                            </tr>
                            <tr>
                                <th scope="row">CENTRO DE TRABAJO: </th>
                                <td>{{$usuario->clave_ct}}</td>
                            </tr>                            
                            <tr>
                                <th scope="col" colspan="2">LUNES 10 DE JUNIO DE 2019, 09:00 hrs. </th>
                            </tr>
                        </tbody>
                    </table>
                </div> 
            </div><hr>
            <div class="row mb50">
                <div class="col-md-10 ml-auto mr-auto text-center">
                    <p class="lead">
                        Gracias por registrarte, por favor ten a la mano tu código de verificación y muestralo el día del evento. <br>
                    </p>
                    <span>Tu código es:</span>    <br>
                    <p >
                        <strong style="font-size: 300%;">{{$usuario->codigo_confirmacion}}</strong> <br>
                        <a href="{{route('folio',[$usuario->codigo_confirmacion])}}" class="btn btn-primary">
                            <i class="fa fa-print" aria-hidden="true"></i>
                            DESCARGA CÓDIGO 
                        </a> 
                    </p>
                    
                </div>
            </div>   
            



            <div class="row mb50">
                <div class="col-md-6 ml-auto mr-auto text-center">
                    <a href="{{url('/')}}" class="btn btn-outline-primary">
                        FINALIZAR REGISTRO
                    </a>                    
                </div>
            </div>    


         



            <hr class="mb80">
        </div>

@stop