<?php

namespace Database\Seeders;

use App\Models\library;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            library::create([
                'book' => fake()->jobTitle(),
                'due_date' => fake()->date(now()),
                'stu_id' => fake()->numberBetween(1, 10),
                'status' => fake()->numberBetween(0, 1)
            ]);
        }
    }
}
