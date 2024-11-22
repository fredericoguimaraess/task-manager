<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    public function run()
    {
        Task::create([
            'title' => 'First Task',
            'description' => 'This is the first task description',
            'due_date' => now()->addDays(1),
            'status' => 'pending',
        ]);

        Task::create([
            'title' => 'Second Task',
            'description' => 'This is the second task description',
            'due_date' => now()->addDays(2),
            'status' => 'in_progress',
        ]);

        Task::create([
            'title' => 'Third Task',
            'description' => 'This is the third task description',
            'due_date' => now()->addDays(3),
            'status' => 'completed',
        ]);

        Task::create([
            'title' => 'Fourth Task',
            'description' => 'This is the fourth task description',
            'due_date' => now()->addDays(4),
            'status' => 'pending',
        ]);
    }
}
