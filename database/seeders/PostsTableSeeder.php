<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(50)->create();

        $posts->each(fn ($post) => Comment::factory()->count(10)->create(["post_id" => $post->id]));
        $posts->each(fn ($post) => Comment::factory()->count(10)->create([
            "created_at" => now()->addMinutes(10),
            "post_id"   => $post->id]
        ));
    }
}
