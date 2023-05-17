@extends('app')
@section('titulo')
    <h1 style="color: #757575">Noticias</h1>
@stop
@section('contenido')
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
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
