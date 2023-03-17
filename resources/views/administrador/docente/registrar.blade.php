@extends('appAdmin')

@section('titulo')
    <h1>Registrar Docente</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Registrar Docente</li>
@stop

@section('contenido')
    <form action="{{url ('/homeAdministrador/docente/registrado')}}" method="POST" class="row g-4 mt-3"> 
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
            <label for="">Dirección:</label>
            <input type="text" class="form-control" name="direccion">
        </div>

       

        <div class="form-group col-6">
            <label for="">Correo electrónico:</label>
            <input type="text" class="form-control" name="correo">
        </div>

        <div class="form-group col-3">
            <label for="">Semestre que impartirá:</label>
            <input type="text" class="form-control" name="semestre">
        </div>

        <div class="form-group col-9">
            <label for="">Número telefónico:</label>
            <input type="number" class="form-control" name="numero">
        </div>

        <div class ="form-group col-9">

            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="{{ asset('/homeAdministrador') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop
