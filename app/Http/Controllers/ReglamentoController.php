<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reglamento;

class ReglamentoController extends Controller
{
    public function reglamento(){
        return view('administrador.reglamento');
    }

    

}
