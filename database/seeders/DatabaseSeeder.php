<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        

        // Category::create([
        //     'name' => 'Web Dessign',
        //     'slug' => 'Web-design',
        // ]);

        // Post::create([
        //     'title' => 'Judul Artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'Judul-artikel-1',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente autem enim ab quaerat quae excepturi dignissimos explicabo mollitia asperiores rerum dolor quod porro, maxime dolorem repellat aut libero dolorum! Possimus animi ipsa excepturi ea facere autem quisquam mollitia. Maiores ipsum, vel ducimus atque rerum nihil? Libero quo itaque nisi porro! Maxime ad odit officiis optio? Labore dolore quasi odit et, illum nisi officia quas, expedita rerum sit nesciunt sint magni ipsam. Hic maiores nihil dolorum architecto quo ea ducimus suscipit.'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([    
            Category::all(),
            User::all()
        ])->create();

    }
}
