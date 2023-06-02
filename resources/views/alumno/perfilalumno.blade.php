@extends('app')



@section('contenido')



<br>

    <div class="container">
    <h1 style="color: #757575;" >Mi Perfil</h1><hr>

    <div class="row">
        
             <div class="col-sm-6">
                <div class="card">
                    <div class="card-header"style=" text-align: center;">
                        <i class="far fa-user-circle fa-6x"></i><br>
                        {{$alumno->nombre}}
                    </div>
                 <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nombre completo</b><div style="float:right; color: #545454;">  {{$alumno->nombre_completo}}</div></li>
                    <li class="list-group-item"><b>Correo</b><div style="float:right; color: #545454">  {{ Auth::user()->email; }}</div></li>
                    <li class="list-group-item"><b>Especialidad</b><div style="float:right; color: #545454">  {{$alumno->carrera}}</div></li>
                    <li class="list-group-item"><b>Generación</b><div style="float:right; color: #545454">  {{$alumno->generacion}}</div></li>
                </ul>
                </div>
            </div>


        <div class="col-sm-6">
            <div class="card">
            <div class="card-header" style="background-color: gray;">
            <p style="color: white; font-size: 20px; text-align: center;">Información</p>
               
                
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fas fa-pencil-alt"></i><b> CURP</b> <br>{{$alumno->CURP}}</li>
                <li class="list-group-item"><i class="fas fa-hashtag"></i><b> Número de control</b> <br>{{$alumno->numero_control}}</li>
                <li class="list-group-item"><i class="far fa-clock"></i><b> Turno</b><br> {{$alumno->turno}}</li>
                @if($alumno->sexo == 'H')
                    <li class="list-group-item"><i class="fas fa-mars"></i><b> Sexo</b><br> Masculino</li>
                @else
                <li class="list-group-item"><i class="fas fa-venus"></i><b> Sexo</b><br> Femenino</li>
                @endif

            </ul>
            </div>
        </div>
        </div>

</div>

@stop