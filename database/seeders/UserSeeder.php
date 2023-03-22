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
            'name' => 'DAMIAN EDUARDO',
            'alumno_id' => 1,
            'email' => 'DAMIAN.NAVEJAS@dgeti.com',
            'password' => bcrypt('damian123')
        ])->assignRole('alumno');

        User::create([
            'name' => 'MIGUEL ANGEL',
            'alumno_id' => 2,
            'email' => 'MIGUEL.GARCIA@dgeti.com',
            'password' => bcrypt('miguel123')
        ])->assignRole('alumno');
    }
    
}
