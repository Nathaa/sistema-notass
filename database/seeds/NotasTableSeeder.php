<?php

use App\Nota;
use Illuminate\Database\Seeder;

class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Nota::create([
            'notas' => '9',
            'descripcion' => 'examen1',
           ]);

        Nota::create([
            'notas' => '3',
            'descripcion' => 'examen2',
           ]);
    }
}
