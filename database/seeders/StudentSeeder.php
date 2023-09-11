<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        student::create([
            'name' => 'Hassan Khan',
            'email' => 'test@anymail.com',
            'city' => 'Karachi',
            'age' => 28
        ]);
    }
}
