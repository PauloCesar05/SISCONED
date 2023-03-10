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
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style = "background-color: #5E2A2A;">
  <a class="navbar-brand" href="#">Cetis No.107</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active"> 
        <a class="nav-link" href="">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Opciones
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Perfil</a>
          <a class="dropdown-item" href="#">Horario</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Kardex</a>
        </div>
      </li>
    </ul>
  </div>
    <a class="d-block" href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();" style = "color: white;">
      {{ __('Cerrar sesión') }}
    </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
    </form>
</nav>
<section class="content" style="padding:0 .99rem !important;">
  <div class="card card-secondary">
        <div class="card-body table-responsive">
            @yield('contenido')
    </div>
  </div>
  </section>
</body>
</html>
