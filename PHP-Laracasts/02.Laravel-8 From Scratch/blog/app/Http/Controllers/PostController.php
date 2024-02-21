<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()
            ->filter(request(['search','catagory','author']))
            ->paginate(6)

        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}