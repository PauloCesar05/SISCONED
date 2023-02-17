@extends('appAdmin')

@section('titulo')
    <h1>Noticias</h1>
@stop

@section('contenido')


<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
              <form action="{{url ('/homeAdministradorPublicar')}}" method= "POST">
              @csrf
              <div class="form-group">
              <label for="">¿Qué estás pensando?</label>
              <input type="text" class="form-control" name="mensaje" required> <br>
              <input type="submit" value="Publicar" class="btn btn-primary">
              </div>
              </form>
          </div>
              
                
          </div>
        </div>
      </div>
    </div>
  </section>

  <br>

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="timeline">
            @foreach ($noticias as $n)
            <div>
              <i class="fas fa-user bg-green"></i>
              <div class="timeline-item">
                <span class="time"><i class="fas fa-clock"></i> {{ $n->created_at }}</span>
                <h3 class="timeline-header"><a href="#">Administrador</a> equipo administrativo</h3>

                <div class="timeline-body">
                  {{ $n->mensaje }}
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-primary btn-sm">Ir al detalle</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
@stop
