<?php

use App\Periodo;
use Illuminate\Database\Seeder;

class PeriodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Periodo::create([
            'nombre' => 'Periodo 2018',
            'duracion' => '12 semanas',
            'año' => '2018',
           ]);

        Periodo::create([
            'nombre' => 'Periodo 2017',
            'duracion' => '12 semanas',
            'año' => '2018',
           ]);
    }
}
