<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Alumno extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'alumnos';

    public function materias(){
        return $this->hasMany(AlumnoMateria::class, 'alumno_id', 'id')->with('materia');
    }

    protected $fillable = [
        'nombre',
        'edad',
        'curp',
        'direccion',
        'nombre_tutor',
        'numero_tutor'
    ];
   
}
