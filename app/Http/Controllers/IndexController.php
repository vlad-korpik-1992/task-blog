<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['categoriesCount'] = Category::all()->count();
        $data['postsCount'] = Post::all()->count();
        return view('index', compact('data'));
    }
}
