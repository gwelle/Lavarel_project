<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Post::factory()->create([
            'title' => 'Sample Post',
            'content' => 'This is a sample post content.'
        ]);

        Post::factory()->create([
            'title' => 'Another Sample Post',
            'content' => 'This is another sample post content.'
        ]);

        Post::factory()->create([
            'title' => 'Yet Another Sample Post',
            'content' => 'This is yet another sample post content.'
        ]);
    }
}
