<?php

use App\Alumno;
use Illuminate\Database\Seeder;

class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Alumno::create([
            'nombre' => 'Alma del Carmen Portillo',
            'edad' => '12',
            'direccion' => 'hcbwekcbwkecbwkcw',
            'encargado' => 'Sanches Arevalo',
           ]);

        Alumno::create([
            'nombre' => 'Gricelda Maria Salinas',
            'edad' => '15',
            'direccion' => 'dhbwedjwkd',
            'encargado' => 'Arturo Herrera',
           ]);
    }
}
