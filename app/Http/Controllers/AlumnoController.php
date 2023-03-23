<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function perfil(){

        $alumno=Alumno::find(Auth::user()->alumno_id);
        
        return view('alumno.perfilalumno', compact('alumno')); 
    }

    public function inicio(){
       
    
        return view('');
    }
    

    public function reportePdf(){
        $alumnos = array("Alumno1", "Alumno2", "Alumno3"); //Datos de la base de datos
        PDF::SetPaper('A4', 'landscape'); //Configuracion de la libreria
        $pdf = PDF::loadView('PDF.reporteGenerico', array('alumnos' => $alumnos)); //Carga la vista y la convierte a PDF
        return $pdf->download("reporteGenerico.pdf"); //Descarga el PDF con ese nombre
    }

    public function reporteAlumnoPdf($id){
        $alumno = Alumno::with('materias')->find($id);
        PDF::SetPaper('A4', 'landscape'); //Configuracion de la libreria
        $pdf = PDF::loadView('PDF.reporteAlumno', array('alumno' => $alumno)); //Carga la vista y la convierte a PDF
        return $pdf->download("reporteAlumno".$alumno->id.".pdf"); //Descarga el PDF con ese nombre
    }

    public function materias(){
        //Este id de alumno lo van a sacar del Auth::user()->alumno_id
        $id=2;
        $alumno = Alumno::with('materias')->find($id);


        dd($alumno);

    }


}
