<?php

use App\Curso;
use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Curso::create([
            'nombre' => 'Ciencias',
            'descripcion' => 'ciencias naturales',
           ]);

        Curso::create([
            'nombre' => 'matematicas',
            'descripcion' => 'matematicas I',
           ]);
    }
}
