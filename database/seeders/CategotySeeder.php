<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategotySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => "personal task",
                'icon' => "/img/category_images/icons8-tasks-24.png",
            ],
            [
                'name' => "travel",
                'icon' => "/img/category_images/icons8-car-26.png",
            ],
            [
                'name' => "household tasks",
                'icon' => "/img/category_images/icons8-house-50.png",
            ],
            [
                'name' => "syllabus",
                'icon' => "/img/category_images/icons8-syllabus-30.png",
            ],
        ]);
    }
}
