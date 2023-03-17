<?php

namespace App\Http\Controllers;
use App\Models\Docente;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function consultar(Request $request){
        $docentes = Docente::when($request->has("termino"), function($q) use ($request){
        return $q->where("nombre", "like", "%".$request->get("termino")."%");
        })->orderBy('id', 'desc')->paginate(15);
        
        $docentes->appends($request->all());
        
        return view('administrador.docente.consultar', compact('docentes'));
    }

    public function registrar(){

        return view('administrador.docente.registrar');
        
        
    }

    public function guardar(Request $datos){ 

        $docente = Docente::create($datos->post());
        return redirect('/homeAdministrador/consultar/docente');




    }

}
