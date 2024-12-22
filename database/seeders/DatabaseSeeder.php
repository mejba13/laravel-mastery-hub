<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
//    public function run(): void
//    {
//        // User::factory(10)->create();
//
//        User::factory(10)->has(
//            Post::factory(3)->has(
//                Comment::factory(2)
//            )
//        )->create();
//
//        Tag::factory(5)->create();
//
//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
//    }

//    public function run()
//    {
//        // Create an admin user
//        User::factory()->create([
//            'name' => 'Admin User',
//            'email' => 'admin@example.com',
//            'role' => 'admin',
//            'password' => bcrypt('password'), // Set a default password
//        ]);
//
//        // Create a regular user
//        User::factory()->create([
//            'name' => 'Regular User',
//            'email' => 'user@example.com',
//            'role' => 'user',
//            'password' => bcrypt('password'), // Set a default password
//        ]);
//    }

    public function run()
    {
        // Add individual seeders here
        $this->call([
            OrderSeeder::class, // Call OrderSeeder
        ]);
    }
}
