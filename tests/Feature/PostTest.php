<?php

// tests/Feature/PostTest.php
namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_post_creation()
    {
        $post = Post::factory()->create();
        $this->assertDatabaseHas('posts', ['title' => $post->title]);
    }

    public function test_post_has_user()
    {
        $post = Post::factory()->create();
        $this->assertInstanceOf(User::class, $post->user);
    }

    public function test_post_has_comments()
    {
        $post = Post::factory()->hasComments(2)->create();
        $this->assertCount(2, $post->comments);
    }

    public function test_post_has_tags()
    {
        $post = Post::factory()->hasTags(3)->create();
        $this->assertCount(3, $post->tags);
    }
}
