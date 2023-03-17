<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ReglamentoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\NoticiasAlumnoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['alumno', 'role:alumno']], function(){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/homeNoticia', [NoticiasAlumnoController::class, 'home']);
    Route::get('/home', [HomeController::class, 'home']);

    
});
Route::group(['middleware' => ['admin', 'role:admin']], function(){
    //Rutas de administrador
    Route::get('/homeAdministrador', [HomeController::class, 'homeAdministrador']);
    Route::post('/homeAdministrador/publicar', [NoticiaController::class, 'publicar']);
    Route::get('/homeAdministrador/eliminar/{id}', [NoticiaController::class, 'eliminar']);
    Route::get('/homeAdministrador/reglamento', [ReglamentoController::class, 'reglamento']);
    Route::get('/homeAdministrador/registrar/alumno', [AlumnoController::class, 'registrar']);
    Route::post('/homeAdministrador/alumno/registrado', [AlumnoController::class, 'guardar']);
    Route::get('/homeAdministrador/consultar/docente', [DocenteController::class, 'consultar']);
    Route::get('/homeAdministrador/registrar/docente', [DocenteController::class, 'registrar']);
    Route::post('/homeAdministrador/docente/registrado', [DocenteController::class, 'guardar']);

    //Rutas de alumnos
    Route::get('/alumno/consultar', [AlumnoController::class, 'consultar']);
    Route::get('/alumno/registrar', [AlumnoController::class, 'registrar']);
    Route::get('/reporte/pdf', [AlumnoController::class, 'reportePdf']);
    Route::get('/reporte/pdf/{id}', [AlumnoController::class, 'reporteAlumnoPdf']);

    //Ruta de ejemplo para obtener detalle de calificacion
    Route::get('alumno/materias', [AlumnoController::class, 'materias']);

});

Route::group(['prefix' =>'admin', 'middleware' => ['admin', 'role:admin']], function(){
    Route::get('/homeAdministrador', function(){
        return view('administrador.home');
    });
});


require __DIR__.'/auth.php';
