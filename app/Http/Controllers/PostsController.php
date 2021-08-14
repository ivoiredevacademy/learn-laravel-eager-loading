<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with(['category','creator:id,name'])->paginate(20);

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $post->load(['comments' => function($query) {
            $query->with('owner')->orderBy('created_at', 'desc');
        }]);

        return view('posts.show', compact('post'));
    }
}
