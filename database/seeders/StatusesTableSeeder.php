<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            ['name' => 'todo', 'title' => 'К выполнению'],
            ['name' => 'in_progress', 'title' => 'В работе'],
            ['name' => 'done', 'title' => 'Выполнено'],
        ];

        foreach ($statuses as $status) {
            Status::create($status);
        }
    }
}
