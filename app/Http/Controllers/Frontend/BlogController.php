<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::inRandomOrder()->get();
        return view('frontend.blog.index', compact('posts'));
    }
    public function show(Post $post)
    {
        return view('frontend.blog.show', compact('post'));
    }
}
