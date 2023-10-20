<?php

namespace Database\Seeders;

use App\Models\users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(path: "database/json/users.json");
        $users = collect(json_decode($json));
        $users->each(function ($items) {
            users::create([
                'username' => $items->username,
                'name' => $items->name,
                'email' => $items->email,
                'password' => Hash::make($items->password),
                'role' => $items->role,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });
    }
}
