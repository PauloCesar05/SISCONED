@extends('appAdmin')

@section('titulo')
    <h1>Consultar Docentes</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Consultar Docentes</li>
@stop

@section('contenido')

<form class="form-inline my-2 my-lg-0 float-right" method="get" action="{{ url('/homeAdministrador/consultar/docente')}}" role="Search">
      <input name="termino" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" value="{{request()->get('termino','')}}">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form><br><br>

<div class="responsive-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Dirección</th>
                    <th>Correo</th>
                    <th>Número telefónico</th>
                    <th>Semestres que imparte</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($docentes as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->nombre }}</td>
                    <td>{{ $a->edad }}</td>
                    <td>{{ $a->direccion }}</td>
                    <td>{{ $a->correo }}</td>
                    <td>{{ $a->numero }}</td>
                    <td>{{ $a->semestre }}</td>
                    <td>
                        <a href="" class="btn btn-danger btn-sm">
                            <i class="fas fa-times"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
