<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SectionStudent;

class SectionStudentSeeder extends Seeder
{
    public function run(): void
    {
        SectionStudent::create([
            'section_id' => 1,
            'student_id' => 1,
        ]);
        SectionStudent::create([
            'section_id' => 1,
            'student_id' => 2,
        ]);
        SectionStudent::create([
            'section_id' => 2,
            'student_id' => 1,
        ]);
    }
}