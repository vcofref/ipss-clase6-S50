<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'first_name' => 'Juan',
            'last_name' => 'Pérez',
            'email' => 'juan.perez@estudiante.ipss.cl',
        ]);
        Student::create([
            'first_name' => 'Ana',
            'last_name' => 'García',
            'email' => 'ana.garcia@estudiante.ipss.cl',
        ]);
    }
}
