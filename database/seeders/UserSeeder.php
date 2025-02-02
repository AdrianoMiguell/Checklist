<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Adriano Santos",
                'email' => "adrianosantos260804@gmail.com",
                'password' => Hash::make('CHamor-260804'),
            ]
        ]);
    }
}
