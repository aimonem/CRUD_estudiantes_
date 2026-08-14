<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clase;
use App\Models\Estudiante;

class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Clase::query()->delete();

        $estudiante = Estudiante::first();

        Clase::create([
            'nombre' => 'Robotica',
            'estudiante_id' => $estudiante->id,
        ]);

        Clase::create([
            'nombre' => 'Matematica',
            'estudiante_id' => $estudiante->id,
        ]);
    }
}