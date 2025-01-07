<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alumnos')->insert([
            [
                'nombre' => 'Julian Pérez',
                'email' => 'julian.perez@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Mario González',
                'email' => 'mario.gonzalez@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Alberto López',
                'email' => 'albert.lopez@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            ]);
    }
}
