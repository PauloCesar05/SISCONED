<?php

namespace Database\Seeders;

use App\Models\AlumnoMateria;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlumnoMateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlumnoMateria::create([ 'alumno_id' =>2 , 'materia_id' => 12, 'numero_control' => '19325061070317' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 8 ]);
        AlumnoMateria::create([ 'alumno_id' =>2 , 'materia_id' => 14, 'numero_control' => '19325061070317' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 10 ]);
        AlumnoMateria::create([ 'alumno_id' =>2 , 'materia_id' => 20, 'numero_control' => '19325061070317' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 8 ]);
        AlumnoMateria::create([ 'alumno_id' =>2 , 'materia_id' => 47, 'numero_control' => '19325061070317' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 7 ]);
        AlumnoMateria::create([ 'alumno_id' =>2 , 'materia_id' => 50, 'numero_control' => '19325061070317' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 9 ]);
        AlumnoMateria::create([ 'alumno_id' =>2 , 'materia_id' => 65, 'numero_control' => '19325061070317' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 10 ]);
        AlumnoMateria::create([ 'alumno_id' =>2 , 'materia_id' => 66, 'numero_control' => '19325061070317' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 6 ]);
        AlumnoMateria::create([ 'alumno_id' =>3 , 'materia_id' => 14, 'numero_control' => '19325061070528' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 8 ]);
        AlumnoMateria::create([ 'alumno_id' =>3 , 'materia_id' => 19, 'numero_control' => '19325061070528' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 5 ]);
        AlumnoMateria::create([ 'alumno_id' =>3 , 'materia_id' => 20, 'numero_control' => '19325061070528' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 3 ]);
        AlumnoMateria::create([ 'alumno_id' =>3 , 'materia_id' => 27, 'numero_control' => '19325061070528' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 6 ]);
        AlumnoMateria::create([ 'alumno_id' =>3 , 'materia_id' => 28, 'numero_control' => '19325061070528' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 7 ]);
        AlumnoMateria::create([ 'alumno_id' =>3 , 'materia_id' => 29, 'numero_control' => '19325061070528' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 2 ]);
        AlumnoMateria::create([ 'alumno_id' =>3 , 'materia_id' => 35, 'numero_control' => '19325061070528' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 8 ]);
        AlumnoMateria::create([ 'alumno_id' =>3 , 'materia_id' => 47, 'numero_control' => '19325061070528' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 7 ]);
        AlumnoMateria::create([ 'alumno_id' =>3 , 'materia_id' => 50, 'numero_control' => '19325061070528' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 6 ]);
        AlumnoMateria::create([ 'alumno_id' =>4 , 'materia_id' => 6, 'numero_control' => '20302060750212' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 2 ]);
        AlumnoMateria::create([ 'alumno_id' =>4 , 'materia_id' => 29, 'numero_control' => '20302060750212' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 3 ]);
        AlumnoMateria::create([ 'alumno_id' =>4 , 'materia_id' => 45, 'numero_control' => '20302060750212' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 9 ]);
        AlumnoMateria::create([ 'alumno_id' =>4 , 'materia_id' => 50, 'numero_control' => '20302060750212' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 10 ]);
        AlumnoMateria::create([ 'alumno_id' =>4 , 'materia_id' => 64, 'numero_control' => '20302060750212' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 10 ]);
        AlumnoMateria::create([ 'alumno_id' =>4 , 'materia_id' => 65, 'numero_control' => '20302060750212' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 7 ]);
        AlumnoMateria::create([ 'alumno_id' =>4 , 'materia_id' => 67, 'numero_control' => '20302060750212' , 'periodo' => 'SEMESTRAL 2 - 2022' , 'calificacion' => 8 ]);
    }
}
