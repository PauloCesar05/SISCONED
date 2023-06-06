<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Luis Carlos',
            'email' => 'santillan.itc@gmail.com',
            'password' => bcrypt('carlos123')
        ])->assignRole('admin');


        User::create([
            'name' => 'MIGUEL ANGEL',
            'alumno_id' => 2,
            'email' => 'miguel.garcia@dgeti.com',
            'password' => bcrypt('miguel123')
        ])->assignRole('alumno');

        User::create([
            'name' => 'PABLO CANEK',
            'alumno_id' => 3,
            'email' => 'pablo.canek@dgeti.com',
            'password' => bcrypt('pablo123')
        ])->assignRole('alumno');

        User::create([
            'name' => 'AOLANIS NAYLE',
            'alumno_id' => 4,
            'email' => 'aolanis.nayle@dgeti.com',
            'password' => bcrypt('aolanis123')
        ])->assignRole('alumno');
    }

    
    
}
