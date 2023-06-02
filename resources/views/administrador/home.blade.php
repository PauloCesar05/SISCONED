@extends('appAdmin')

@section('titulo')
    <h1 style="color: #757575">Noticias</h1>
@stop

@section('contenido')


<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group ">
              <form action="{{url ('/homeAdministrador/publicar')}}" method= "POST" class="row g-4 mt-3">
              @csrf
              <div class="form-group col-12">
              <label for="">¿Qué estás pensando?</label>
              <input type="text" autocomplete="off" class="form-control" name="mensaje" required> <br>
              
              <div class="form-group">
              <input type="submit" value="Publicar" class="btn btn-success">
              <input type="file" id="exampleFormControlFile1">
              </div>

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
                <span class="time"><i class="fas fa-clock"></i> {{ $n->fecha }}</span>
                <h3 class="timeline-header"><a href="#">{{ Auth::user()->name; }}</a> equipo administrativo</h3>

                <div class="timeline-body">
                  {{ $n->mensaje }}
                </div>
                <div class="timeline-footer"> 
                  <a href="{{url('/homeAdministrador/eliminar')}}/{{$n->id}}" class="btn btn-danger btn-sm">Eliminar</a>

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
