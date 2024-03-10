<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('divisiones')->insert([
            ['nombre' => 'AFC Norte'],
            ['nombre' => 'AFC Sur'],
            ['nombre' => 'AFC Oeste'],
            // Agrega aquí los otros registros de divisiones
        ]);
    }
}
