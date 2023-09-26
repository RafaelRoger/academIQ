<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classe::create([
            'classe' => '7',
            'ciclo'  => '1'
        ]);

        Classe::create([
            'classe' => '8',
            'ciclo'  => '1'
        ]);

        Classe::create([
            'classe' => '9',
            'ciclo'  => '1'
        ]);

        Classe::create([
            'classe' => '10',
            'ciclo'  => '1'
        ]);

        Classe::create([
            'classe' => '11',
            'ciclo'  => '2'
        ]);

        Classe::create([
            'classe' => '12',
            'ciclo'  => '2'
        ]);
    }
}
