<?php

namespace Database\Seeders;

use App\Models\Incidencia; //que no se olvide por si no lo encuentra el modelo incidencia
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Incidencia::factory()
            ->count(50)
            ->create();
    }
}
