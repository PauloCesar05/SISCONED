<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function consultar(Request $request){
       
        $alumnos=Alumno::when($request->has("termino"), function($q) use ($request){
          return $q->where("nombre_completo", "like", "%".$request->get("termino")."%");
        })->orderBy('id', 'desc')->paginate(15);
        
        $alumnos->appends($request->all());

        return view('administrador.alumno.consultar', compact('alumnos'));
    }

    public function registrar(){

        return view('administrador.alumno.registrar');
        
        
    }

    public function guardar(Request $datos){ 

        $alumno = Alumno::create($datos->post());
        return redirect('/homeAdministrador/consultar/alumno');




    }
    

    public function reportePdf(){
        $alumnos = array("Alumno1", "Alumno2", "Alumno3"); //DAtos de la base de datos
        PDF::SetPaper('A4', 'landscape'); //Configuracion de la libreria
        $pdf = PDF::loadView('PDF.reporteGenerico', array('alumnos' => $alumnos)); //Carga la vista y la convierte a PDF
        return $pdf->download("reporteGenerico.pdf"); //Descarga el PDF con ese nombre
    }

    public function reporteAlumnoPdf($id){
        $alumno = Alumno::find($id);
        PDF::SetPaper('A4', 'landscape'); //Configuracion de la libreria
        $pdf = PDF::loadView('PDF.reporteAlumno', array('alumno' => $alumno)); //Carga la vista y la convierte a PDF
        return $pdf->download("reporteAlumno".$alumno->id.".pdf"); //Descarga el PDF con ese nombre
    }


}
