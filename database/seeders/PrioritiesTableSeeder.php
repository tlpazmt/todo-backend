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
            ['name' => 'low', 'title' => 'Низкий'],
            ['name' => 'medium', 'title' => 'Средний'],
            ['name' => 'high', 'title' => 'Высокий'],
        ];

        foreach ($priorities as $priority) {
            Priority::create($priority);
        }
    }
}
