<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            [
                'course_id' => 1,
                'subject_name' => 'Programming Fundamentals',
                'subject_description' => 'Introduction to programming concepts and logic',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'subject_name' => 'Database Management Systems',
                'subject_description' => 'Design and implementation of database systems',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 2,
                'subject_name' => 'Data Structures and Algorithms',
                'subject_description' => 'Study of efficient data organization and algorithms',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 2,
                'subject_name' => 'Artificial Intelligence',
                'subject_description' => 'Machine learning and AI concepts',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 3,
                'subject_name' => 'Business Process Management',
                'subject_description' => 'Analysis and optimization of business processes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 3,
                'subject_name' => 'Enterprise Systems',
                'subject_description' => 'Implementation of ERP and business systems',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
