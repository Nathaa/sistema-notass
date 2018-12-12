<?php

use App\Estado;
use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Estado::create([
            'nombre' => 'Presente',
           ]);

        Estado::create([
            'nombre' => 'Ausente',
           ]);

        Estado::create([
            'nombre' => 'Permiso',
           ]);
    }
}
