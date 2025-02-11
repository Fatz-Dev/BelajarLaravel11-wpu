<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Category::factory(3)->create();
        Category::create([
            'name' => 'Web Design',
            'slug' => 'webDesignerDev',
            'colorr' => 'red'
        ]);

        Category::create([
            'name' => 'BackEnd',
            'slug' => 'Back-End-Dev',
            'colorr' => 'green'
        ]);

        Category::create([
            'name' => 'Front End',
            'slug' => 'Front-End-Dev',
            'colorr' => 'blue'
        ]);

        Category::create([
            'name' => 'Full Stack Dev',
            'slug' => 'FullStack-Dev',
            'colorr' => 'yellow'
        ]);
    }
}
