<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyecto Base</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('css/OverlayScrollbars.min.css')}}">

  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
  <style>
    div nav ul {
        justify-content: center;
    }
  </style>
</head>



<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-mini sidebar-collapse" style="background-color: #F3F3F3;">
  <!-- NAVBAR -->
<nav class="navbar navbar-expand navbar-dark" style="background-color: #5E2A2A;">
  <a class="navbar-brand" href="#">Nombre del plantel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

  </div>
    <ul class="navbar-nav">
      <li class="nav-item active"> 
        <a class="nav-link" href="{{asset('/home')}}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          <i class="far fa-user-circle"></i>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{asset('/perfilalumno')}}">Perfil</a>
          <a class="dropdown-item" href="{{ url('reporteAlumno/pdf', auth()->user()->alumno_id) }}">Kardex</a>
          <div class="dropdown-divider"></div>
          <a class="d-block" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: black; text-align: center">
            {{ __('Cerrar sesión') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
          </form>
        </div>
      </li>
    </ul>
</nav>
<section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            @yield('titulo')
                        </div>
                        <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            @yield('breadcrum')
                        </ol>
                        </div>
                    </div>
                </div>
            </section>
<div class="table-responsive" style="background-color: #;">
      @yield('contenido')
  </div>
   
  <!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
