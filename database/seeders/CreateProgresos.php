<?php

namespace Database\Seeders;

use App\Models\Progreso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateProgresos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $progreso = Progreso::create([
            'progreso' => 'Progreso 1',
            'fechaInicio' => '1/1/2024',
            'fechaFin'=>'1/31/2024',
            'peso'=>'0.25'
        ]
        );
        $progreso = Progreso::create([
            'progreso' => 'Progreso 2',
            'fechaInicio' => '2/1/2024',
            'fechaFin'=>'2/29/2024',
            'peso'=>'0.35'
        ]
        );
        $progreso = Progreso::create([
            'progreso' => 'Progreso 3',
            'fechaInicio' => '3/1/2024',
            'fechaFin'=>'3/31/2024',
            'peso'=>'0.40'
        ]
        );
    }
}
