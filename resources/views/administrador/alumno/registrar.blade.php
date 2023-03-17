@extends('appAdmin')

@section('titulo')
    <h1>Registrar Alumno</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Registrar Alumno</li>
@stop

@section('contenido')

    <form action="{{url ('/homeAdministrador/alumno/registrado')}}" method="POST" class="row g-4 mt-3"> 
    @csrf
        <div class="form-group col-6">
            <label for="">Nombre:</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group col-3">
            <label for="">Edad:</label>
            <input type="number" class="form-control" name="edad">
        </div>

        <div class="form-group col-9">
            <label for="">CURP:</label>
            <input type="text" class="form-control" name="curp">
        </div>

        <div class="form-group col-9">
            <label for="">Dirección:</label>
            <input type="text" class="form-control" name="direccion">
        </div>

        <div class="form-group col-6">
            <label for="">Nombre del tutor:</label>
            <input type="text" class="form-control" name="nombre_tutor">
        </div>

        <div class="form-group col-3">
            <label for="">Número del tutor:</label>
            <input type="text" class="form-control" name="numero_tutor">
        </div>

        <br><br>
        

        <div class="form-group col-9">
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="{{ asset('/homeAdministrador') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>

    


 
@stop
