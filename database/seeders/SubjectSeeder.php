<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::create([
            'name' => 'Java',
            'code' => 'CAP101',
            'description' => 'Curso básico de Java',
        ]);
        Subject::create([
            'name' => 'Mysql',
            'code' => 'CAP102',
            'description' => 'Curso introductorio de Mysql',
        ]);
    }
}
