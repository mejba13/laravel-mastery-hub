<?php

// app/Http/Controllers/PostController.php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user', 'comments', 'tags')->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = Post::create($request->only('title', 'content', 'user_id'));
        $post->tags()->sync($request->tags);
        return redirect()->route('posts.index');
    }
}
