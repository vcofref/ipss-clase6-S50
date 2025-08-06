<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Section::create([
            'code' => 'MAT101-A',
            'start_date' => '2025-08-10',
            'end_date' => '2025-12-10',
            'subject_id' => 1,
            'teacher_id' => 1,
        ]);
        Section::create([
            'code' => 'HIS101-A',
            'start_date' => '2025-08-10',
            'end_date' => '2025-12-10',
            'subject_id' => 2,
            'teacher_id' => 1,
        ]);
    }
}
