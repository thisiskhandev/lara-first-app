<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seeding using factory method
        // student::factory()->count(10)->create();
        // student::factory(5)->create(); // Shorthand method

        // Seeding data
        $this->call([
            StudentSeeder::class,
            LibrarySeeder::class,
            UserSeeder::class
        ]);
    }
}
