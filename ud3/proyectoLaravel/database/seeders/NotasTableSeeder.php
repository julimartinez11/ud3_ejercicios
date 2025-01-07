<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notas')->insert([
            [
                'alumno_id' => 1,  // Asumiendo que corresponde a Juan Pérez
                'asignatura_id' => 1,  // Asumiendo que corresponde a Matemáticas
                'nota' => 85,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'alumno_id' => 1,
                'asignatura_id' => 2,  // Asumiendo que corresponde a Historia
                'nota' => 90,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'alumno_id' => 2,  // Asumiendo que corresponde a María González
                'asignatura_id' => 1,
                'nota' => 88,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
