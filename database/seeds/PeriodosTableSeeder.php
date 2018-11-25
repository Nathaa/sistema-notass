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
            'nombre' => 'Nathaly Amaya',
            'duracion' => '12 semanas',
            'año' => '2018',
           ]);
    }
}
