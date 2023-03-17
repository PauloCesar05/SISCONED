<?php

namespace Database\Seeders;

use App\Models\Noticia;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Noticia::create([
            'mensaje' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam repellat, temporibus amet reprehenderit qui aliquid, mollitia illo laudantium, itaque voluptas ea? Ad, nisi voluptatem modi praesentium in magni dolorem reprehenderit!',
        ]);

        Noticia::create([
            'mensaje' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime repellendus totam perspiciatis voluptas cum eveniet iure commodi voluptates dolorum aliquam, ullam quidem eum? Est nihil repudiandae temporibus in corporis corrupti.' ,
            
        ]);

        Noticia::create([
            'mensaje' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere molestias earum qui minus consectetur cumque nobis reiciendis aspernatur adipisci voluptatum? Natus doloribus at hic debitis sit. Esse ea commodi inventore.',
            
        ]);
    }
}
