<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run(): void
    {
        Teacher::create([
            'first_name' => 'Victor',
            'last_name' => 'Cofre',
            'email' => 'victor.cofre@docente.ipss.cl',
        ]);
    }
}
