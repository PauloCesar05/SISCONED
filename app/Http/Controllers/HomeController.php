<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use PHPUnit\Framework\Error\Notice;

class HomeController extends Controller
{
    public function home(){
        $noticias = Noticia::orderBy('id', 'DESC')->get();
        return view('home', compact('noticias'));
    }

    public function homeAdministrador(){
        $noticias = Noticia::orderBy('id', 'DESC')->get();

        return view('administrador.home', compact('noticias'));
    }
}
