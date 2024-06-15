<?php

namespace Database\Seeders;

use App\Models\Priority;
use Illuminate\Database\Seeder;

class PrioritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $priorities = [
            ['id' => 1, 'name' => 'low', 'title' => 'Низкий'],
            ['id' => 2, 'name' => 'medium', 'title' => 'Средний'],
            ['id' => 3, 'name' => 'high', 'title' => 'Высокий'],
        ];

        foreach ($priorities as $priority) {
            Priority::create($priority);
        }
    }
}
