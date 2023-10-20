<?php

namespace App\Http\Controllers\Main\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        return view('main.blog.show', compact('post'));
    }
}
