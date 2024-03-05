<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Job;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            [
                'employer_id' => 1,
                'title' => 'Software Developer',
                'description' => 'We are looking for a skilled software developer to join our team.',
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employer_id' => 1,
                'title' => 'Graphic Designer',
                'description' => 'We are hiring a talented graphic designer to create amazing user experiences.',
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        Job::insert($jobs);
    }
}
