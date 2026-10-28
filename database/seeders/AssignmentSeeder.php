<?php

namespace Database\Seeders;

use App\Models\Assignment;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Assignment::create([
            'title' => 'RESTful API Implementation with Laravel',
            'course_code' => 'CS302',
            'description' => 'Build a complete RESTful backend API using controllers, resources, and validation.',
            'due_date' => Carbon::now()->addDays(5)->toDateString(),
            'priority' => 'high',
            'status' => 'in_progress',
            'grade' => null,
        ]);

        Assignment::create([
            'title' => 'Database Indexing & Normalization Lab',
            'course_code' => 'DB201',
            'description' => 'Analyze slow queries and apply 3NF schema transformations with appropriate indexes.',
            'due_date' => Carbon::now()->addDays(12)->toDateString(),
            'priority' => 'medium',
            'status' => 'pending',
            'grade' => null,
        ]);

        Assignment::create([
            'title' => 'Microservices vs Monolith Comparison Paper',
            'course_code' => 'SE310',
            'description' => 'Submit an analytical report comparing distributed systems against modular monoliths.',
            'due_date' => Carbon::now()->addDays(2)->toDateString(),
            'priority' => 'high',
            'status' => 'submitted',
            'grade' => null,
        ]);

        Assignment::create([
            'title' => 'TCP/IP Protocol & Subnetting Practical',
            'course_code' => 'NET102',
            'description' => 'Hands-on packet tracing and IPv4 CIDR allocation exercise.',
            'due_date' => Carbon::now()->subDays(3)->toDateString(),
            'priority' => 'low',
            'status' => 'graded',
            'grade' => 95,
        ]);
    }
}
