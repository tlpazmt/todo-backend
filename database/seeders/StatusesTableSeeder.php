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
            ['id' => 1, 'name' => 'todo', 'title' => 'К выполнению'],
            ['id' => 2, 'name' => 'in_progress', 'title' => 'В работе'],
            ['id' => 3, 'name' => 'done', 'title' => 'Выполнено'],
        ];

        foreach ($statuses as $status) {
            Status::create($status);
        }
    }
}
