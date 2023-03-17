<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte PDF Generico</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        h3{
            background-color: blue;
            color: white;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid black;
            border-radius: 20px;
        }

        .contenedor{
            display: flex;
            
        }

        p{
            font-size: 10px; 
        }
        .card{
            display: flex;
        }

        .pie-pagina{
            text-align: center;
        }

        .footer{
            padding: 1em 0;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        .tam{
          font-size: 8px;
        }
        .margen{
          width: 40%;
        }
        table{
          width: 85%;
         
          
        }
        .relleno{
          padding-left: 20px;
          padding-right: 20px;
         
          
        }
        .relleno1{
          padding-left: 20px;
          padding-right: 120px;
          padding-top: 15px;
          
        }

        .relleno2{
          padding-left: 20px;
          padding-right: 20px;
          padding-bottom: 15px;
          
        }
        
    
    </style>
</head>
<body>




   


<table style = "margin-left: auto; margin-right: auto;"">
  <tr style = "background-color: #454545; text-align: center; color: white;"  class="principal">
    <td colspan="2" >Historial Académico</td> 
  </tr> 
  
    <tr>
      <td class="relleno1"><p><b>Nombre del subsistema:</b><br> DIRECCIÓN GENERAL DE EDUCACIÓN <br>TECNOLÓGICA INDUSTRIAL Y DE <br>SERVICIOS</p></td>
      <td class="relleno"><p><b>CURP:</b><br> {{ $alumno-> CURP}}</p></td>
    </tr>

    <tr>
    <td class="relleno"><p><b>Nombre del Plantel:</b><br> CENTRO DE ESTUDIOS TECNOLÓGICA <br>INDUSTRIAL Y DE SERVICIOS</p></td> 
    <td class="relleno"><p><b>Nombre del alumno:</b><br> {{ $alumno-> nombre_completo}}</p></td> 
    </tr>

  

    <tr>
    <td class="relleno"><p><b>Folio RNA:</b></p></td>
    <td class="relleno"><p><b>Periodo Ingreso:</b></p></td>
    </tr>

    <tr>
    <td class="relleno"><p><b>Avance creditos:</b></p></td>
    <td class="relleno"><p><b>Modalidad educativa:</b></p></td>
    </tr>

    <tr>
    <td class="relleno"><p><b>Escolarizada</b></p></td>
    <td class="relleno"><p><b>Opción educativa:</b><br>Presencial</p></td>
    </tr>


    <tr>
    <td class="relleno"><p><b>Plan de Estudios:</b><br>Acuerdo 653</p></td>
    <td class="relleno"><p><b>Carrera Técnica en:</b><br> {{$alumno->carrera}} </p></td>
    </tr>

  



</table>



<br><br>
<div class="responsive-table ">
<table class="table table-bordered table-sm">
  <thead class="tam">
    <tr>
      <th scope="col">Nombre Plantel</th>
      <th scope="col">Semestre</th>
      <th scope="col">Nombre</th>
      <th scope="col">Calif</th>
      <th scope="col">Periodo Escolar</th>
    </tr>
  </thead>
  <tbody class="tam">
  @foreach ($alumno->materias as $a)
    <tr>
      <th scope="row">CETIS NO.107</th>
      <td>PENDIENTE</td>
      <td>{{$a->materia->nombre}}</td>
      <td>{{$a->calificacion}}</td>
      <td>{{$a->periodo}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div> 










<div class="footer">
    <p>MARTITZA DEL CARMEN CAZAREZ RIOS</p>
    <p>________________________________</p>
    <p style="font-size: 8px">LA DIRECTORA DEL PLANTEL</p>
</div>
</body>
</html>
