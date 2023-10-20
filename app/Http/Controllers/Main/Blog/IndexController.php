<?php

namespace App\Http\Controllers\Main\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(10);
        return view('main.blog.index', compact('posts'));
    }
}
