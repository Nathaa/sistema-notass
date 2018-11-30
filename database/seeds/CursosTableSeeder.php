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
            'alumno_id' => '1',
           ]);

        Curso::create([
            'nombre' => 'matematicas',
            'descripcion' => 'matematicas I',
            'alumno_id' => '2',
           ]);
    }
}
