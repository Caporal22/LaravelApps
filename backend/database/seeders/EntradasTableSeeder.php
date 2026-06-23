<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Entrada;

class EntradasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        Entrada::create([
            'user_id' => 1,  // ID del usuario 
            'titulo'=> 'Primer Título',
            'imagen'=> 'imagen1.jpg',
            'tag'=> 'Etiqueta1',
            'contenido'=> 'Este es el contenido del primer registro',

        ]);
        Entrada::create([
            'user_id' => 1,  // ID del usuario 
            'titulo'=> 'Segundo Título',
            'imagen'=> 'imagen2.jpg',
            'tag'=> 'Etiqueta2',
            'contenido'=> 'Este es el contenido del segundo registro',

        ]); */

        Entrada::factory()->count(100)->create();
    }

}
