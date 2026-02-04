<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'course_name' => 'Bachelor of Science in Information Technology',
                'course_description' => 'Focuses on software, hardware, and network systems',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Bachelor of Science in Computer Science',
                'course_description' => 'Focuses on algorithms, programming, and computation',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Bachelor of Science in Information Systems',
                'course_description' => 'Focuses on business processes and IT solutions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
