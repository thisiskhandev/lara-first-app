<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // 5 - BETTER APPROACH USING FAKE DATA see factory folder.
        student::factory(10)->create();

        // 4 - FAKE DATA USING FAKER
        /*
        for ($i = 1; $i <= 10; $i++) {
            student::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->email(),
                'city' => fake()->city(),
                'age' => fake()->numberBetween(18, 30)
            ]);
        }
        */

        // 3 - ADDING DATA USING JSON CREATED A FOLDER IN DB
        /*
        $json = File::get(path: 'database/json/students.json');
        $students = collect(json_decode($json));
        $students->each(function ($items) {
            student::create([ // Create method automatically passes two more value which are timestamps
                'name' => $items->name,
                'email' => $items->email,
                'age' => $items->age
            ]);
        });
        */


        // 2 - ADDING MULTI RECORDS (HARD CODED) multi dimentional array
        // _collect_ is a feature of laravel
        /*
        $students = [
            [
                'name' => 'Hassan Khan',
                'email' => 'test@anymail.com',
                'city' => 'Karachi',
                'age' => 28
            ],
            [
                'name' => 'Hassan Khan 2',
                'email' => 'test1@anymail.com',
                'city' => 'Lahore',
                'age' => 28
            ],
            [
                'name' => 'Hassan Khan 3',
                'email' => 'test3@anymail.com',
                'city' => 'Lahore',
                'age' => 30
            ],
            [
                'name' => 'Hassan Khan 4',
                'email' => 'test4@anymail.com',
                'city' => 'Lahore',
                'age' => 35
            ],
        ];
        $students = collect($students);
        $students->each(function ($items) {
            student::insert($items);
        });
        */


        // 1 - ADDING SINGLE RECORD (HARD CODED)
        /*
        student::create([
            'name' => 'Hassan Khan',
            'email' => 'test@anymail.com',
            'city' => 'Karachi',
            'age' => 28
        ]);
        */
    }
}
