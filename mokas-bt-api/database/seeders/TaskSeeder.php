<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::factory()->count(3)->create();
        $tasks = [
            [
                'title' => 'Helszín foglalás',

            ],
            [
                'title' => 'Egyeztetés',
                'description' => 'Igazgatóval megbeszélés',
                'status' => 'folyamatban',
            ]
        ];
        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
