<?php

use App\Rango;
use Illuminate\Database\Seeder;

class RangosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Rango::create([
            'nombre' => '1 trimestre',
            'duracion' => '12 semanas',
            'fechaInicio' => '2018-01-11',
            'fechaFinal' => '2018-09-01',
            'periodo_id' => '1',
            'curso_id' => '1',
       ]);

        Rango::create([
            'nombre' => '2 trimestre',
            'duracion' => '10 semanas',
            'fechaInicio' => '2017-02-01',
            'fechaFinal' => '2017-11-05',
            'periodo_id' => '2',
            'curso_id' => '1',
           ]);
    }
}
