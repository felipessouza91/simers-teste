<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert random 10 records
        for($index=0;$index<10;$index++){
            User::create([
                'name' => Str::random(10),
                'email' => Str::random(10),
                'password' => Str::random(10),
                'cpf' => Str::random(10),
                'phone' => Str::random(10),
                'birthdate' => Date('Y-m-d')
            ]);
        }
    }
}
