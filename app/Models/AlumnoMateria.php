<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AlumnoMateria extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "alumno_materias";

    public function materia(){
        return $this->belongsTo(Materia::class, 'materia_id');
    }
}
