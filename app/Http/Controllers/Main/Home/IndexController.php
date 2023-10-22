<?php

namespace App\Http\Controllers\Main\Home;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function __invoke(Post $posts)
    {
        $sortedPosts = $posts->get()->sortBy('created_at');
        $headerPosts = $sortedPosts->take(1);
        $randomPosts = $posts->where('id', '!=', $headerPosts[0]->id)->get()->random(2);
        return view('main.home.index', compact('sortedPosts', 'headerPosts', 'randomPosts'));
    }
}
